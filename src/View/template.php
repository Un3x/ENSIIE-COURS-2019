<?php

function loadView($view, $data) {
    ?>
    <!doctype html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>ReddIItE</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php include_once '../src/View/layout/header.php' ?>
    <div class="main-container">
        <?php include_once '../src/View/'.$view.'.php' ?>
    </div>
    <?php include_once '../src/View/layout/footer.php' ?>
    </body>
    </html>
<?php
}
?>