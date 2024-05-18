<?php

require_once '../vendor/autoload.php';

use App\Controllers\AuthController;
use App\Controllers\ReportController;

$requestUri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

session_start();

switch ($requestUri) {
    case '/login':
        (new AuthController())->login();
        break;
    case '/logout':
        (new AuthController())->logout();
        break;
    case '/report':
        (new ReportController())->report();
        break;
    case '/report/generate':
        (new ReportController())->generatePDF();
        break;
    default:
        echo "404 Not Found";
        break;
}
