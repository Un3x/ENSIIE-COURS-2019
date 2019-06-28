<?php
include_once '../src/utils/autoloader.php';
$serviceManager = new \Rediite\ServiceManager();

$uri = $_SERVER['REQUEST_URI'];

$uriArray = explode ('?', $uri);
$uriPath = $uriArray[0];
$getParams = $uriArray[1] ?? null;
$uriPathArray = explode('/', $uriPath);
$controllerName = empty($uriPathArray[1]) ? 'index' : $uriPathArray[1];
$actionName = $uriPathArray[2] ?? 'index';
$controllerPath = '\\Rediite\\Model\\Factory\\Controller\\' . ucfirst($controllerName) . 'ControllerFactory';
$controller = $serviceManager->get($controllerPath);
$data = $controller->$actionName();

include_once '../src/View/template.php';
loadView($controllerName, $data);