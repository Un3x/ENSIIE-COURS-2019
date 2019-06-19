<?php
include_once '../src/utils/autoloader.php';


$dbfactory = new \Rediite\Model\Factory\dbFactory();
$dbAdapter = $dbfactory->createService();
$topicHydrator = new \Rediite\Model\Hydrator\TopicHydrator();
$topicRepository = new \Rediite\Model\Repository\TopicRepository($dbAdapter, $topicHydrator);
$userHydrator = new \Rediite\Model\Hydrator\UserHydrator();
$userRepository = new \Rediite\Model\Repository\UserRepository($dbAdapter, $userHydrator);
$authenticatorService = new \Rediite\Model\Service\AuthenticatorService($userRepository);



$topicName =  !empty($_POST['name']) ? $_POST['name'] : null;

if (null !== $topicName && $authenticatorService->isAuthenticated()) {
  $topicRepository->insert($topicName, $authenticatorService->getCurrentUser()); 
}
header('Location: index.php'); 