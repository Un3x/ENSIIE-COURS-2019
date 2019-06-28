<?php
include_once '../src/utils/autoloader.php';

$serviceManager = new \Rediite\ServiceManager();
$commentRepository = $serviceManager->get(\Rediite\Model\Factory\CommentRepositoryFactory::class);


$commentId =  $_POST['id'];
$topicId =  $_POST['topic_id'];


if (null !== $commentId && null !== $topicId) {
  $commentRepository->delete($commentId); 
}

header('Location: comments.php?topic_id='.$topicId); 