<?php

namespace Rediite\Model\Hydrator;

use \Rediite\Model\Entity\Topic as TopicEntity;

class TopicHydrator {
  public function hydrate($data): TopicEntity
  {
    $topic = new TopicEntity();
    $topic
      ->setId($data['id'])
      ->setName($data['name'])
      ->setUserId($data['user_id'])
      ->setCreatedAt($data['created_at'])
      ->setUpdatedAt($data['updated_at']);
    return $topic;
  }
}