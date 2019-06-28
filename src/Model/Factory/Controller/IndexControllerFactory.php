<?php

namespace Rediite\Model\Factory\Controller;

use Rediite\Controller\Index;
use Rediite\Model\Factory\FactoryInterface;
use Rediite\Model\Factory\TopicRepositoryFactory;
use Rediite\ServiceManager;

class IndexControllerFactory implements FactoryInterface
{
  public function createService(ServiceManager $sm)
  {
    return new Index(
      $sm->get(TopicRepositoryFactory::class),
      $sm->get(\Rediite\Model\Factory\AuthenticationServiceFactory::class)
    );
  }
}