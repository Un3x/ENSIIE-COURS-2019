<?php
namespace Rediite\Model\Factory;

use Rediite\Model\Hydrator\TopicHydrator;
use Rediite\Model\Repository\TopicRepository;
use \Rediite\ServiceManager;

class TopicRepositoryFactory implements FactoryInterface
{

    public function createService (ServiceManager $serviceManager)
    {
        return new TopicRepository(
            $serviceManager->get(dbAdapterFactory::class),
            $serviceManager->get(TopicHydrator::class)
        );
    }
}