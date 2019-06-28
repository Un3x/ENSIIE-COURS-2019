<?php
include_once '../src/utils/autoloader.php';

$serviceManager = new \Rediite\ServiceManager();
$commentRepository = $serviceManager->get(\Rediite\Model\Factory\CommentRepositoryFactory::class);


$topicId = $_GET['topic_id'];

$data = [
    'comments' => $commentRepository->findAllByTopicId($topicId),
    'topic_id' => $topicId
];

include_once '../src/View/template.php';
loadView('comment', $data);
?>
