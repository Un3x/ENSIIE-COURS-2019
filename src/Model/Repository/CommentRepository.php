<?php
namespace Rediite\Model\Repository;

use \Rediite\Model\Entity\Comment;
use \Rediite\Model\Hydrator\CommentHydrator;

class CommentRepository {

    /**
     * @var \PDO
     */
  private $dbAdapter;

  /**
   * @var CommentHydrator
   */
  private $commentHydrator;

  public function __construct(
    \PDO $dbAdapter,
    CommentHydrator $commentHydrator
  ) {
    $this->dbAdapter = $dbAdapter;
    $this->commentHydrator = $commentHydrator;
  }

  function insert(int $topicId, string $text)
  {
    $sql = "insert into comments (topic_id, text) values ($topicId, '$text')";
    $this->dbAdapter->query($sql);
  }

  function delete(int $id)
  {
    $sql = "delete from comments where id = $id";
    $this->dbAdapter->query($sql);
  }

  function findAllByTopicId(int $topicId) {
    $sql = "select id, text, topic_id, created_at, updated_at, (Select COUNT(*) from votes where comment_id = 1) as score from comments where topic_id = $topicId";
    $comments = [];
    foreach ($this->dbAdapter->query($sql) as $rawComment) {
        $comments[] = $this->commentHydrator->hydrate($rawComment);
    }
    return $comments;
  }
}


