<?php
$topics = $data["topics"];
?>

<ul class="topic-container">
    <?php 
    /** \Rediite\Model\Entity\Topic $topic */
    foreach ($topics as $topic): ?>
        <li>
            <div class="topic-item" id="topic-link-<?= $topic->getId() ?>">
                <a  href="comments?topic_id=<?php echo $topic->getId() ?>">
                    <?php echo $topic->getName(); ?>
                </a>
                <?php if($authenticatorService->isAuthenticated() && $user->getId() === $topic->getUserId()): ?>
                    <button onClick="toggleForm(<?= $topic->getId() ?>)">Editer</button>
                    <form action="deleteTopic" method="post">
                        <input type="hidden" name="id" value="<?php echo $topic->getId() ?>">
                        <button type="submit">Supprimer</button>
                    </form>
                <?php endif; ?>
            </div>
            <?php if($authenticatorService->isAuthenticated() && $user->getId() === $topic->getUserId()): ?>
            <div class="topic-item topic-edit-form" id="topic-edit-form-<?= $topic->getId() ?>">
                <form action='updateTopic' method="post">
                    <input type="text" name="name" value="<?= $topic->getName(); ?>">
                    <button type="submit">Valider</button>
                </form>
            </div>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
    <?php if($authenticatorService->isAuthenticated()): ?>
    <li class="topic-item">
        <form action='addTopic' method="post">
            <input type="text" name="name">
            <button type="submit">Valider</button>
        </form>
    </li>
    <?php endif; ?>
</ul>

<script type="text/javascript">
    function toggleForm(id)
    {
        $("#topic-edit-form-" + id).toggle();
        $("#topic-link-" + id).toggle();
    }
</script>