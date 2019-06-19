<?php
namespace Rediite\Model\Repository;

use \Rediite\Model\Entity\User as UserEntity;
use \Rediite\Model\Hydrator\UserHydrator;

class UserRepository {

   /**
     * @var \PDO
     */
    private $dbAdapter;

       /**
     * @var UserHydrator
     */
    private $userHydrator;

  
    public function __construct(
      \PDO $dbAdapter,
      UserHydrator $userHydrator

    ) {
      $this->dbAdapter = $dbAdapter;
      $this->userHydrator = $userHydrator;
    }

    function insert(string $email, string $password)
    {
      $stmt = $this->dbAdapter->prepare(
        'insert into "user" (email, password) values (:email, :password)'
      );
      $stmt->bindValue(':email', $email, \PDO::PARAM_STR);
      $stmt->bindValue(':password', $password, \PDO::PARAM_STR);
      $stmt->execute();
    }

    function findOneByEmail($email): ?UserEntity
    {
      $stmt = $this->dbAdapter->prepare(
        'Select * from "user" where email = :email'
      );
      $stmt->bindValue(':email', $email, \PDO::PARAM_STR);
      $stmt->execute();
      $rawUser = $stmt->fetch();
      return $rawUser ? $this->userHydrator->hydrate($rawUser) : null;
    }

    public function findOneById ($userId)
    {
      $stmt = $this->dbAdapter->prepare(
        'Select * from "user" where id = :id'
      );
      $stmt->bindValue(':id', $userId, \PDO::PARAM_INT);
      $stmt->execute();
      $rawUser = $stmt->fetch();
      return $rawUser ? $this->userHydrator->hydrate($rawUser) : null;
    }

}