<?php
include_once '../src/utils/autoloader.php';
include_once '../src/View/template.php';

$serviceManager = new \Rediite\ServiceManager();
$authenticatorService = $serviceManager->get(\Rediite\Model\Factory\AuthenticationServiceFactory::class);

$email =  !empty($_POST['email']) ? $_POST['email'] : null;
$password =  !empty($_POST['password']) ? $_POST['password'] : null;

$viewData = [];
if (null !== $email && null !== $password) {  
  $user = $userRepository->findOneByEmail($email);
  if (null !== $user && password_verify($password, $user->getPassword())) {
    $_SESSION['user_id'] = $user->getId();
    header('Location: index.php');
    exit;
  } 
  $viewData['failedAuthent'] = 'Authentication failed';
  loadView('login', $viewData);
  
}