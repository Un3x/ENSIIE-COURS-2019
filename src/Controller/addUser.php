<?php
include_once '../src/utils/autoloader.php';
include_once '../src/View/template.php';

$serviceManager = new \Rediite\ServiceManager();
$authenticatorService = $serviceManager->get(\Rediite\Model\Factory\AuthenticationServiceFactory::class);

$email =  !empty($_POST['email']) ? $_POST['email'] : null;
$password =  !empty($_POST['password']) ? $_POST['password'] : null;
$passwordVerify =  !empty($_POST['password_verify']) ? $_POST['password_verify'] : null;

$viewData = [];

function checkFormData($userService, $email, $password, $passwordVerify)
{
  $errorMessage = [];
  if($userService->doesUserExist($email)) {
    $errorMessage['userAlreadyExist'] = "The user you tried to register already exists";
  }

  if($password !== $passwordVerify) {
    $errorMessage['passwordDoesNotMatch'] = "The the given passwords do not match";
  }

  return $errorMessage;
}

if (null !== $email && null !== $password) {
  $viewData = checkFormData($userService, $email, $password, $passwordVerify);
  if (empty($viewData)) {
    $userRepository->insert($email, password_hash($password, PASSWORD_BCRYPT)); 
    header('Location: index.php');
  }
  loadView('signup', $viewData);
}

