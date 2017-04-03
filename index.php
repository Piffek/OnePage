<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'OnePage/vendor/autoload.php';
use Fw\FrontController;

define('APP_PATH', realpath(dirname(__FILE__) . '/OnePage/App'));
define('PUBLIC_PATH', dirname(__FILE__). '/OnePage/public');

$frontController = new FrontController();
$frontController->start();
