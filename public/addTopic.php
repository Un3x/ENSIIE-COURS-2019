<?php
include_once '../src/utils/autoloader.php';


$dbfactory = new \Rediite\Model\Factory\dbFactory();
$dbAdapter = $dbfactory->createService();
$topicHydrator = new \Rediite\Model\Hydrator\TopicHydrator();
$topicRepository = new \Rediite\Model\Repository\TopicRepository($dbAdapter, $topicHydrator);


$topicName =  !empty($_POST['name']) ? $_POST['name'] : null;

if (null !== $topicName) {
  $topicRepository->insert($topicName); 
}
header('Location: index.php'); 