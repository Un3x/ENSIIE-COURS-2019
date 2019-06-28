<?php
namespace Rediite\Model\Factory;

use Rediite\Model\Factory\UserRepositoryFactory;
use Rediite\Model\Service\AuthenticatorService;
use \Rediite\ServiceManager;

class AuthenticationServiceFactory implements FactoryInterface
{

    public function createService (ServiceManager $serviceManager)
    {
        return new AuthenticatorService(
            $serviceManager->get(UserRepositoryFactory::class)
        );
    }
}