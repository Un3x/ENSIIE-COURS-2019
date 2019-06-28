<?php
namespace Rediite\Model\Repository;

use \Rediite\Model\Entity\Comment;
use \Rediite\Model\Entity\User as UserEntity;
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

  function insert(int $topicId, string $text, UserEntity $user)
  {

    $stmt = $this->dbAdapter->prepare(
      "insert into comments (topic_id, text, user_id) values (:topicId, :text, :userId)"
    );
    $stmt->bindValue(':topicId', $topicId, \PDO::PARAM_INT);
    $stmt->bindValue(':text', $text, \PDO::PARAM_STR);
    $stmt->bindValue(':userId', $user->getId(), \PDO::PARAM_INT);
    $stmt->execute();
  }

  function delete(int $id)
  {
    $stmt = $this->dbAdapter->prepare(
      "delete from comments where id = :id"
    );
    $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
    $stmt->execute();
  }

  function findAllByTopicId(int $topicId) {
    $sql = 
<<<SQL
  SELECT 
    id, 
    text, 
    topic_id, 
    user_id,
    created_at, 
    updated_at, 
    (SELECT COUNT(*) FROM votes WHERE comment_id = comments.id AND voteValue = 't') AS upvote,
    (SELECT COUNT(*) FROM votes WHERE comment_id = comments.id AND voteValue = 'f') AS downvote 
    FROM comments 
    WHERE topic_id = :topicId;
SQL;
    $comments = [];
    $stmt = $this->dbAdapter->prepare($sql);
    $stmt->bindValue(':topicId', $topicId, \PDO::PARAM_INT);
    $stmt->execute();
    foreach ($stmt->fetchAll() as $rawComment) {
        $comments[] = $this->commentHydrator->hydrate($rawComment);
    }
    return $comments;
  }
}


