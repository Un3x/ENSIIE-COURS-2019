<?php
include_once '../src/utils/autoloader.php';

$serviceManager = new \Rediite\ServiceManager();

$commentRepository = $serviceManager->get(\Rediite\Model\Factory\CommentRepositoryFactory::class);
$authenticatorService = $serviceManager->get(\Rediite\Model\Factory\AuthenticationServiceFactory::class);

$topicId =  !empty($_POST['topic_id']) ? $_POST['topic_id'] : null;
$text =  !empty($_POST['text']) ? $_POST['text'] : null;

if (null !== $topicId && null !== $text && $authenticatorService->isAuthenticated()) {
  $commentRepository->insert($topicId, $text, $authenticatorService->getCurrentUser()); 
}
header('Location: comments.php?topic_id='.$topicId); 
