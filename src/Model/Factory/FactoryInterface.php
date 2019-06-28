<?php

namespace Rediite\Model\Factory;

use \Rediite\ServiceManager;

interface FactoryInterface {
  public function createService(ServiceManager $serviceManager);
}