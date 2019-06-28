<?php

namespace Rediite;

class ServiceManager 
{
  /**
   * @var array
   */
  private $registry = [];

  function get(string $className) 
  {
    if (!array_key_exists($className, $this->registry)) {
      $newClass = new $className();
      if ($newClass instanceof \Rediite\Model\Factory\FactoryInterface) {
        $this->registry[$className] = $newClass->createService($this);
      } else {
        $this->registry[$className] = $newClass;      
      }
    }
    return $this->registry[$className];
  }
}