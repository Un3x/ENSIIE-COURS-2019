<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once '../src/Model/Repository/TopicRepository.php';
include_once '../src/Model/Repository/CommentRepository.php';
include_once '../src/Model/Repository/UserRepository.php';
include_once '../src/Model/Factory/dbFactory.php';
include_once '../src/Model/Entity/Topic.php';
include_once '../src/Model/Entity/Comment.php';
include_once '../src/Model/Entity/User.php';
include_once '../src/Model/Hydrator/TopicHydrator.php';
include_once '../src/Model/Hydrator/CommentHydrator.php';
include_once '../src/Model/Hydrator/UserHydrator.php';
include_once '../src/Model/Service/UserService.php';
include_once '../src/Model/Service/AuthenticatorService.php';
