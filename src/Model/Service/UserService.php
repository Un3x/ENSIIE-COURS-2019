<?php

namespace Rediite\Model\Service;

use \Rediite\Model\Repository\UserRepository;

class UserService {

  /**
   * @var UserRepository
   */
  private $userRepository;

  public function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  public function doesUserExist($email): bool
  {
    $user = $this->userRepository->findOneByEmail($email);
    return null !== $user;
  }




}