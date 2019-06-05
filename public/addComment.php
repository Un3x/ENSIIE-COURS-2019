<?php
include_once '../src/utils/autoloader.php';

$dbfactory = new \Rediite\Model\Factory\dbFactory();
$dbAdapter = $dbfactory->createService();
$commentHydrator = new \Rediite\Model\Hydrator\CommentHydrator();
$commentRepository = new \Rediite\Model\Repository\CommentRepository($dbAdapter, $commentHydrator);

$topicId =  !empty($_POST['topic_id']) ? $_POST['topic_id'] : null;
$text =  !empty($_POST['text']) ? $_POST['text'] : null;

if (null !== $topicId && null !== $text) {
  $commentRepository->insert($topicId, $text); 
}
header('Location: comments.php?topic_id='.$topicId); 
