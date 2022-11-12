<?php
//Общие настройки
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


//
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');
require_once(ROOT . '../components/DB.php');
require_once(ROOT . '../models/Model.php');
require_once(ROOT . '../views/View.php');
require_once(ROOT . '../controllers/Controller.php');
$router = new Router;
$router->run();
