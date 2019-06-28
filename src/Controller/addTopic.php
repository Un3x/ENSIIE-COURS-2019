<?php
include_once '../src/utils/autoloader.php';

$serviceManager = new \Rediite\ServiceManager();

$topicRepository = $serviceManager->get(\Rediite\Model\Factory\TopicRepositoryFactory::class);
$authenticatorService = $serviceManager->get(\Rediite\Model\Factory\AuthenticationServiceFactory::class);



$topicName =  !empty($_POST['name']) ? $_POST['name'] : null;

if (null !== $topicName && $authenticatorService->isAuthenticated()) {
  $topicRepository->insert($topicName, $authenticatorService->getCurrentUser()); 
}
header('Location: index.php'); 