<?php

function loadView($view, $data) {
    $serviceManager = new \Rediite\ServiceManager();
    $authenticatorService = $serviceManager->get(\Rediite\Model\Factory\AuthenticationServiceFactory::class);
    $user = $authenticatorService->getCurrentUser();
    ?>
    <!doctype html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>ReddIItE</title>
        <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/982b337637.js"></script>
        <link rel="stylesheet" href="/style.css">

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