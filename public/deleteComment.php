<?php
include_once '../src/utils/autoloader.php';


$dbfactory = new \Rediite\Model\Factory\dbFactory();
$dbAdapter = $dbfactory->createService();
$commentHydrator = new \Rediite\Model\Hydrator\CommentHydrator();
$commentRepository = new \Rediite\Model\Repository\CommentRepository($dbAdapter, $commentHydrator);


$commentId =  $_POST['id'];
$topicId =  $_POST['topic_id'];


if (null !== $commentId && null !== $topicId) {
  $commentRepository->delete($commentId); 
}

header('Location: comments.php?topic_id='.$topicId); 