<?php
include_once '../src/utils/autoloader.php';

$dbfactory = new \Rediite\Model\Factory\dbFactory();
$dbAdapter = $dbfactory->createService();
$topicHydrator = new \Rediite\Model\Hydrator\TopicHydrator();
$topicRepository = new \Rediite\Model\Repository\TopicRepository($dbAdapter, $topicHydrator);

$data = [
    'topics' => $topicRepository->findAll()
];

include_once '../src/View/template.php';
loadView('home', $data);
?>
