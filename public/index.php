<?php

$dbh = new \PDO('pgsql:dbname=ensiie;host=localhost;port=5432"', 'ensiie', 'ensiie');
$sql = 'select * from topics';
$topics = [];
foreach ($dbh->query($sql) as $topic) {
    $topics[] = $topic;
}

$data = [
    'topics' => $topics
];

include_once '../src/View/template.php';
loadView('home', $data);
?>
