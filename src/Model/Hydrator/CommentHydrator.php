<?php

namespace Rediite\Model\Hydrator;

use \Rediite\Model\Entity\Comment as CommentEntity;

class CommentHydrator {
  public function hydrate($data): CommentEntity
  {
    $comment = new CommentEntity();
    $comment
      ->setId($data['id'])
      ->setTopicId($data['topic_id'])
      ->setText($data['text'])
      ->setCreatedAt($data['created_at'])
      ->setUpdatedAt($data['updated_at'])
      ->setScore($data['score']);
    return $comment;
  }
}