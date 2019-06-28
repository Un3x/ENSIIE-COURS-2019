<?php
include_once '../src/utils/autoloader.php';

$serviceManager = new \Rediite\ServiceManager();
$topicRepository = $serviceManager->get(\Rediite\Model\Factory\TopicRepositoryFactory::class);

$topicId =  $_POST['id'];

if (null !== $topicId) {
  $topicRepository->delete($topicId); 
}
header('Location: index.php'); 