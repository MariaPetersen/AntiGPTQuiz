<?php 

class QuestionFormatter() {
  private $regex = "\{([^}]+)\}"; 
  private $uploadedFilePath;
  private $uploadedFile;

  public function __construct() {
    $this->uploadedFilePath  = __DIR__ . './../uploads/codeFile.json';
    $this->uploadedFile = file_get_contents($uploadedFilePath);
    $this->breakSplits = preg_split($this->regex, $this->uploadedFile);
    }

}