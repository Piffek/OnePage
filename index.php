<?php

// Ustawiamy raportowanie błędów
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Nic istotnego w kontekście tego dema,
// ale jak coś to tutaj jest wyłumaczone w 120 s
// https://knpuniversity.com/screencast/php-namespaces-in-120-seconds
require_once 'OnePage/vendor/autoload.php';
use Fw\FrontController;

// Definiujemy ścieżkę do katalogu app, żeby było wygodnej ../ wychodzi katalog wyżej
// bo jesteśmy w public_html
defined('APP_PATH')
|| define('APP_PATH', realpath(dirname(__FILE__) . '/OnePage/App'));
define('PUBLIC_PATH', dirname(__FILE__). '/OnePage/public');

$frontController = new FrontController();
$frontController->start();