<?php
namespace Rediite\Model\Factory;

use Rediite\Model\Hydrator\CommentHydrator;
use Rediite\Model\Repository\CommentRepository;
use \Rediite\ServiceManager;

class CommentRepositoryFactory implements FactoryInterface
{

    public function createService (ServiceManager $serviceManager)
    {
        return new CommentRepository(
            $serviceManager->get(DbAdapterFactory::class),
            $serviceManager->get(CommentHydrator::class)
        );
    }
}