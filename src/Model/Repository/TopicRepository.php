<?php
namespace Rediite\Model\Repository;

use \Rediite\Model\Entity\Topic;
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

  function insert(string $name)
  {
    $sql = "insert into topics (name) values ('$name')";
    $this->dbAdapter->query($sql);
  }

  function delete(int $id)
  {
    $sql = "delete from topics where id = $id";
    $this->dbAdapter->query($sql);
  }

  function findAll() {
    $sql = 'select * from topics';
    $topics = [];
    foreach ($this->dbAdapter->query($sql) as $rawTopic) {
        $topics[] = $this->topicHydrator->hydrate($rawTopic);
    }
    return $topics;
  }
}


