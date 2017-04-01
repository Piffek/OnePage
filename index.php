<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once ('vendor/autoload.php');
use Fw\FrontController;

defined('APP_PATH')
|| define('APP_PATH', realpath(dirname(__FILE__) . 'App'));
define('PUBLIC_PATH', __FILE__. '/public');

$front = new FrontController();
$front->start();

?>