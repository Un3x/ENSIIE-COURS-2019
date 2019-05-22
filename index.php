<?php
$topics = [
    ['label' => 'Comment va-t-on a la fête de la bière'],
    ['label' => 'Qui pour remplacer macron ?'],
    ['label' => 'Le frexit et ses alternatives'],
    ['label' => 'Comment on fait du php ?'],
    ['label' => 'On fait quoi vendredi soir ?'],
    ['label' => 'L\'ananas sur les pizza'],
]

?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>ReddIItE</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
            <span class="logo-container">ReddIItE</span>
            <ul class="link-header-container">
                <li class="link-header-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="link-header-item">
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <div class="main-container">
            <ul class="topic-container">
                <?php foreach ($topics as $topic): ?>
                    <li class="topic-item"><?php echo $topic['label']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="footer">
            This website is provided by ensiie-2019
        </div>
    </body>
</html>