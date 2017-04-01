<?php 
use Framework\FrontController;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';
use fw\FrontController;

define('APP_PATH', realpath(dirname(__FILE__) . '/app'));

$frontcontroller = new FrontController();
$frontcontroller->start();


?>