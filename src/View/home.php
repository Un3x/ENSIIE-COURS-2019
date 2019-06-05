<?php
$topics = $data["topics"];
?>

<ul class="topic-container">
    <?php 
    /** \Rediite\Model\Entity\Topic $topic */
    foreach ($topics as $topic): ?>
        <li class="topic-item">
            <a href="comments.php?topic_id=<?php echo $topic->getId() ?>">
                <?php echo $topic->getName(); ?>
            </a>
            <form action="deleteTopic.php" method="post">
                <input type="hidden" name="id" value="<?php echo $topic->getId() ?>">
                <button type="submit">Supprimer</button>
            </form>
        </li>
    <?php endforeach; ?>
    <li class="topic-item">
        <form action='addTopic.php' method="post">
            <input type="text" name="name">
            <button type="submit">Valider</button>
        </form>
    </li>
</ul>