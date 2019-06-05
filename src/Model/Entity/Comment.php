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
  private $score;

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

  public function getScore()
  {
    return $this->score;
  }

  public function setScore($score)
  {
    $this->score = $score;
    return $this;
  }

}