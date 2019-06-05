<?php

namespace Rediite\Model\Entity;

class Topic {

  /**
   * @var int
   */
  private $id;

  /**
   * @var string
   */
  private $name;

  /**
   * @var \DateTime
   */
  private $createdAt;

  /**
   * @var \DateTime
   */
  private $updatedAt;

  public function getId() 
  {
    return $this->id;
  }

  public function setId(int $id)
  {
    $this->id = $id;
    return $this;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
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

}