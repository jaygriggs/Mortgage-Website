<?php

namespace Drupal\content_email_notice;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Mail\MailManagerInterface;

class EmailConfig {

  protected $configFactory;

  protected $mailManager;

  public function __construct(ConfigFactoryInterface $configFactory, MailManagerInterface $mail_manager) {
    $this->configFactory = $configFactory;
    $this->mailManager = $mail_manager;
  }

  public function onEmail(EntityInterface $entity) {
    $this->onCallback('Email', $entity);
  }

  protected function onCallback($emailfield, EntityInterface $entity) {
    $config = $this->configFactory->get('content_email_notice.settings');
    if ($entity_configuration = $config->get('configuration.' . $entity->getEntityTypeId() . '.' . $emailfield)) {
      $to = $entity_configuration['to'];
      $this->mailManager->mail('content_email_notice', 'notification', $to, 'en', ['config' => $entity_configuration, 'entity' => $entity]);
    }
  }
}
