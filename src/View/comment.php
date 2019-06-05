<?php
  $comments = $data["comments"];
  $topicId = $data["topic_id"];
?>

<ul class="topic-container">
    <?php 
    /** \Rediite\Model\Entity\Comment $topic */
    foreach ($comments as $comment): ?>
        <li class="topic-item">
            <?php echo $comment->getText(); ?>
            Score : <?php echo $comment->getScore(); ?>

            <form action="deleteComment.php" method="post">
                <input type="hidden" name="topic_id" value="<?php echo $topicId ?>">
                <input type="hidden" name="id" value="<?php echo $comment->getId() ?>">
                <button type="submit">Supprimer</button>
            </form>
        </li>
    <?php endforeach; ?>
    <li class="topic-item">
        <form action='addComment.php' method="post">
            <input type="hidden" name="topic_id" value="<?php echo $topicId ?>">
            <input type="textarea" name="text">
            <button type="submit">Valider</button>
        </form>
    </li>
</ul>