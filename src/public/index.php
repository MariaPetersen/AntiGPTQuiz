<?php
$request = $_SERVER['REQUEST_URI'];
$viewDir = './../Views/';
$ctrlDir = './../Controllers';


// Routing
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
  case '/receiveFile':
    require('./../Controllers/ReceiveFileController.php');
    $receiveFile = new ReceiveFile($_FILES['fileToUpload']["tmp_name"]);
    $receiveFile->saveFileAsTxt();
    $receiveFile->reDirectToQuestion();
    break;
  case '/receiveAnswers':
    require('./../Controllers/ReceiveAnswersController.php');
    $receiveFile = new ReceiveAnswers($_POST);
    $receiveFile->writeResultsToJson();
    $receiveFile->reDirectToResults();
    break;
  default: 
    http_response_code(404);  
}
?>
