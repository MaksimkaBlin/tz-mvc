<?php
require 'Model.php';
require 'AbstractController.php';
require 'MainController.php';


$page = filter_input(INPUT_GET, 'page');


switch ($page) {
    case null:
    case 'homepage':
        $controllerName = MainController::class;
        $method = 'index';
        break;
    case 'gallery':
        $controllerName = MainController::class;
        $method = 'gallery';
        break;
    case 'article':
        $controllerName = MainController::class;
        $method = 'article';
        break;
    case 'contact':
        $controllerName = MainController::class;
        $method = 'contact';
        break;
    case 'articles':
        $controllerName = MainController::class;
        $method = 'articles';
        break;
    case 'admin':
        $controllerName = MainController::class;
        $method = 'admin';
        break;

    default:

        $controllerName = MainController::class;
        $method = 'pageNotFound';
        break;
}



$controller = new $controllerName();
$controller->$method();