<?php
$topics = $data["topics"];
?>

<ul class="topic-container">
    <?php foreach ($topics as $topic): ?>
        <li class="topic-item"><?php echo $topic['name']; ?></li>
    <?php endforeach; ?>
</ul>