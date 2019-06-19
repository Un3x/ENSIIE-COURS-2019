<?php

namespace Rediite\Model\Hydrator;

use \Rediite\Model\Entity\User as UserEntity;

class UserHydrator {
  public function hydrate($data): UserEntity
  {
    $topic = new UserEntity();
    $topic
      ->setId($data['id'])
      ->setEmail($data['email'])
      ->setPassword($data['password']);
    return $topic;
  }
}