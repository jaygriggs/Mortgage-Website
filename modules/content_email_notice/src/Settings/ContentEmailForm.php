<?php

namespace Drupal\content_email_notice\Settings;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ContentEmailForm extends ConfigFormBase implements ContainerInjectionInterface {

  protected $entityTypeManager;

  public function __construct(ConfigFactoryInterface $config_factory, EntityTypeManagerInterface $etmanager) {
    parent::__construct($config_factory);
    $this->entityTypeManager = $etmanager;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('entity_type.manager')
    );		
  }

  protected function getEditableConfigNames() {
    return ['content_email_notice.settings'];
  }

  public function getFormId() {
    return 'content_email_notice__settings';
  }

  protected function getEntityTypes() {
    $definitions = array_filter($this->entityTypeManager->getDefinitions(), function (EntityTypeInterface $entity_type) {
      return $entity_type->isSubclassOf(ContentEntityInterface::class);
    });
    return $definitions;	
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);
    $definitions = $this->getEntityTypes();  
    $config = $this->config('content_email_notice.settings');
    
    foreach ($definitions as $etid => $entity_type)
     {
      $i++;
      if($i==5){
       foreach (['Email'] as $emailfield) 
       {
        $options = $config->get('configuration.' . $etid . '.' . $emailfield);
        $options = $options ?: [
          'to' => '',
          'subject' => '',
          'body' => '',
        ];
		
        $form[$etid . '__' . $emailfield] = [
          '#type' => 'details',
          '#title' => $this->t('@label @emailfield', ['@label' => $entity_type->getLabel(), '@emailfield' => $emailfield]),
        ];

        $form[$etid . '__' . $emailfield][$etid . '__' . $emailfield . '__' . 'enable'] = [
          '#type' => 'checkbox',
          '#title' => $this->t('Enable Notices'),
          '#default_value' => !empty($options['to']),
        ];

        $form[$etid . '__' . $emailfield][$etid . '__' . $emailfield . '__' . 'to'] = [
          '#type' => 'textfield',
          '#title' => $this->t('To'),
          '#default_value' => $options['to'],
        ];

        $form[$etid . '__' . $emailfield][$etid . '__' . $emailfield . '__' . 'subject'] = [
          '#type' => 'textfield',
          '#title' => $this->t('Subject'),
          '#default_value' => $options['subject'],
        ];

        $form[$etid . '__' . $emailfield][$etid . '__' . $emailfield . '__' . 'body'] = [
          '#type' => 'textarea',
          '#title' => $this->t('Body'),
          '#default_value' => $options['body'],
        ];

        $form[$etid . '__' . $emailfield][$etid . '__' . $emailfield . '__' . 'token_help'] = [
          '#theme' => 'token_tree_link',
          '#token_types' => [$etid],
        ];
      }
     }
	}
    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $definitions = $this->getEntityTypes();
    $config = $this->config('content_email_notice.settings');
    foreach (array_keys($definitions) as $etid) {
      foreach (['Email'] as $emailfield) {
        if (!empty($form_state->getValue($etid . '__' . $emailfield . '__' . 'enable'))) {
          $config->set('configuration.' . $etid . '.' . $emailfield, [
            'to' => $form_state->getValue($etid . '__' . $emailfield . '__' . 'to'),
            'subject' => $form_state->getValue($etid . '__' . $emailfield . '__' . 'subject'),
            'body' => $form_state->getValue($etid . '__' . $emailfield . '__' . 'body'),
          ]);
        }
        else {
          $config->set('configuration.' . $etid . '.' . $emailfield, []);
        }
      }
    }
    $config->save();
  }
}
