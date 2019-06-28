<?php
namespace Rediite\Model\Repository;

use \Rediite\Model\Entity\Topic;
use \Rediite\Model\Entity\User as UserEntity;
use \Rediite\Model\Hydrator\TopicHydrator;

class TopicRepository {

    /**
     * @var \PDO
     */
  private $dbAdapter;

  /**
   * @var TopicHydrator
   */
  private $topicHydrator;

  public function __construct(
    \PDO $dbAdapter,
    TopicHydrator $topicHydrator
  ) {
    $this->dbAdapter = $dbAdapter;
    $this->topicHydrator = $topicHydrator;
  }

  function insert(string $name, UserEntity $user)
  {
    $stmt = $this->dbAdapter->prepare(
      "insert into topics (name, user_id) values (:name, :user_id)"
    );
    $stmt->bindValue(':name', $name, \PDO::PARAM_STR);
    $stmt->bindValue(':user_id', $user->getId(), \PDO::PARAM_INT);
    $stmt->execute();
  }

  function delete(int $id)
  {
    $stmt = $this->dbAdapter->prepare(
      "delete from topics where id = :id"
    );
    $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
    $stmt->execute();

  }

  function findAll() {
    $stmt = $this->dbAdapter->prepare(
      'select * from topics'
    );
    $stmt->execute();
    $topics = [];
    foreach ($stmt->fetchAll() as $rawTopic) {
        $topics[] = $this->topicHydrator->hydrate($rawTopic);
    }
    return $topics;
  }

  function findAllByUser($userId) {
    $stmt = $this->dbAdapter->prepare(
      'select * from topics where id = :user_id'
    );
    $stmt->bindValue(':user_id', $userId, \PDO::PARAM_INT);
    $stmt->execute();
    $topics = [];
    foreach ($stmt->fetchAll() as $rawTopic) {
        $topics[] = $this->topicHydrator->hydrate($rawTopic);
    }
    return $topics;
  }
}


