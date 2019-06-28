<?php
namespace Rediite\Model\Factory;

use Rediite\Model\Hydrator\UserHydrator;
use Rediite\Model\Repository\UserRepository;
use \Rediite\ServiceManager;

class UserRepositoryFactory implements FactoryInterface
{

    public function createService (ServiceManager $serviceManager)
    {
        return new UserRepository(
            $serviceManager->get(DbAdapterFactory::class),
            $serviceManager->get(UserHydrator::class)
        );
    }
}