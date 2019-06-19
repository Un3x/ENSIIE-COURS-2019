<?php

namespace Rediite\Model\Entity;

class Comment {

  /**
   * @var int
   */
  private $id;

  /**
   * @var int
   */
  private $topicId;

  /**
   * @var string
   */
  private $text;

  /**
   * @var int
   */
  private $userId;

  /**
   * @var \DateTime
   */
  private $createdAt;

  /**
   * @var \DateTime
   */
  private $updatedAt;

  /**
   * @var integer
   */
  private $upvote;

    /**
   * @var integer
   */
  private $downvote;

  public function getId() 
  {
    return $this->id;
  }

  public function setId(int $id)
  {
    $this->id = $id;
    return $this;
  }

  public function getTopicId()
  {
    return $this->topicId;
  }

  public function setTopicId($topicId)
  {
    $this->topicId = $topicId;
    return $this;
  }

  public function getText()
  {
    return $this->text;
  }

  public function setText($text)
  {
    $this->text = $text;
    return $this;
  }

  public function getUserId()
  {
    return $this->userId;
  }

  public function setUserId($userId)
  {
    $this->userId = $userId;
    return $this;
  }

  public function getCreatedAt()
  {
    return $this->createdAt;
  }

  public function setCreatedAt($createdAt) 
  {
    $this->createdAt = $createdAt;
    return $this;
  }

  public function getUpdatedAt()
  {
    return $updatedAt;
  }

  public function setUpdatedAt($updatedAt)
  {
    $this->updatedAt = $updatedAt;
    return $this;
  }

  public function getUpvote()
  {
    return $this->upvote;
  }

  public function setUpvote($upvote)
  {
    $this->upvote = $upvote;
    return $this;
  }

  public function getDownvote()
  {
    return $this->downvote;
  }

  public function setDownvote($downvote)
  {
    $this->downvote = $downvote;
    return $this;
  }

  public function calculateScore()
  {
    return $this->getUpvote() - $this->getDownvote();
  }
}