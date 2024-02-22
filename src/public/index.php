<?php
$request = $_SERVER['REQUEST_URI'];
$viewDir = './../Views/';

switch ($request) {
  case '':
  case '/':
    require __DIR__ . $viewDir . 'import.php';
    break;
  case '/questions':
    require __DIR__ . $viewDir . 'questions.php';
    break;
  case '/results':
    require __DIR__ . $viewDir . 'results.php';
    break;
  default: 
    http_response_code(404);  
}
?>
