<?php
include_once '../src/utils/autoloader.php';


$dbfactory = new \Rediite\Model\Factory\dbFactory();
$dbAdapter = $dbfactory->createService();
$topicHydrator = new \Rediite\Model\Hydrator\TopicHydrator();
$topicRepository = new \Rediite\Model\Repository\TopicRepository($dbAdapter, $topicHydrator);


$topicId =  $_POST['id'];

if (null !== $topicId) {
  $topicRepository->delete($topicId); 
}
header('Location: index.php'); 