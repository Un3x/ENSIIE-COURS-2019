<?php
include_once '../src/utils/autoloader.php';

$dbfactory = new \Rediite\Model\Factory\dbFactory();
$dbAdapter = $dbfactory->createService();
$commentHydrator = new \Rediite\Model\Hydrator\CommentHydrator();
$commentRepository = new \Rediite\Model\Repository\CommentRepository($dbAdapter, $commentHydrator);
$userHydrator = new \Rediite\Model\Hydrator\UserHydrator();
$userRepository = new \Rediite\Model\Repository\UserRepository($dbAdapter, $userHydrator);
$authenticatorService = new \Rediite\Model\Service\AuthenticatorService($userRepository);


$topicId =  !empty($_POST['topic_id']) ? $_POST['topic_id'] : null;
$text =  !empty($_POST['text']) ? $_POST['text'] : null;

if (null !== $topicId && null !== $text && $authenticatorService->isAuthenticated()) {
  $commentRepository->insert($topicId, $text, $authenticatorService->getCurrentUser()); 
}
header('Location: comments.php?topic_id='.$topicId); 
