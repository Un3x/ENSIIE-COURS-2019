<?php
include_once '../src/utils/autoloader.php';

$dbfactory = new \Rediite\Model\Factory\dbFactory();
$dbAdapter = $dbfactory->createService();


$commentHydrator = new \Rediite\Model\Hydrator\CommentHydrator();
$commentRepository = new \Rediite\Model\Repository\CommentRepository($dbAdapter, $commentHydrator);

$topicId = $_GET['topic_id'];

$data = [
    'comments' => $commentRepository->findAllByTopicId($topicId),
    'topic_id' => $topicId
];

include_once '../src/View/template.php';
loadView('comment', $data);
?>
