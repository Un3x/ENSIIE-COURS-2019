<?php
  $comments = $data["comments"];
  $topicId = $data["topic_id"];
?>

<ul class="topic-container">
    <?php 
    /** \Rediite\Model\Entity\Comment $topic */
    foreach ($comments as $comment): ?>
        <li class="topic-item">
            <div class="comment-container">
                <div class="comment-text">
                    <?php echo $comment->getText(); ?>
                </div>
                <div class="comment-vote-container">
                    <div>
                        <i class="fas fa-chevron-up"></i>
                    </div>
                    <div>
                        <strong><?php echo $comment->calculateScore(); ?></strong>
                    </div>
                    <div>
                        (<?php echo $comment->getUpvote(); ?> / -<?php echo $comment->getDownvote(); ?>)
                    </div>   
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>                 
                </div>
            </div>
            <?php if($authenticatorService->isAuthenticated() && $user->getId() === $comment->getUserId()): ?>
            <div class="delete-form">
                <form action="deleteComment" method="post">
                    <input type="hidden" name="topic_id" value="<?php echo $topicId ?>">
                    <input type="hidden" name="id" value="<?php echo $comment->getId() ?>">
                    <button type="submit">Supprimer</button>
                </form>
            </div>
        <?php endif; ?>
        </li>
    <?php endforeach; ?>
    <?php if($authenticatorService->isAuthenticated()): ?>
    <li class="topic-item">
        <form action='addComment' method="post">
            <input type="hidden" name="topic_id" value="<?php echo $topicId ?>">
            <input type="textarea" name="text">
            <button type="submit">Valider</button>
        </form>
    </li>
    <?php endif; ?>
</ul>