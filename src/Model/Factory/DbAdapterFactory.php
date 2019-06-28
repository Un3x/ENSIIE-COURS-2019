<?php

namespace Rediite\Model\Factory;

use \Rediite\ServiceManager;

class DbAdapterFactory implements FactoryInterface
{
  public function createService(ServiceManager $serviceManager) {
    return new \PDO('pgsql:dbname=ensiie;host=localhost;port=5432"', 'ensiie', 'ensiie');
  }
}