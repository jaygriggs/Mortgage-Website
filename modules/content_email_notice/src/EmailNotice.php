<?php

namespace Drupal\content_email_notice;

use Drupal\Core\Utility\Token;

class EmailNotice {
  protected $token;
  public function __construct(Token $token) {
    $this->token = $token;
  }

  public function mail($key, &$message, $params) {
    if ($key == 'notification') {
      $this->EmailNotice($key, $message, $params);
    }
    return $this;
  }

  protected function EmailNotice($key, &$message, $params) {
    $entity = $params['entity'];
    $message['subject'] = $this->token->replace($params['config']['subject'], [$entity->getEntityTypeId() => $entity]);
    $message['body'] = [$this->token->replace($params['config']['body'], [$entity->getEntityTypeId() => $entity])];
  }
}
