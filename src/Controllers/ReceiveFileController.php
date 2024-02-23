<?php 

class ReceiveFile {
    private $targetDir;
    private $codeFileDir;

    public function __construct($file) {
        $this->targetDir = __DIR__ . "/../uploads/";
        $this->codeFileDir = $this->targetDir . "codeFile.txt";
        $this->file = $file;
    }

    private function getFileContent($file) {
        return nl2br(file_get_contents($file));
    }

    public function saveFileAsTxt() {
        $fileAsString = $this->getFileContent($this->file);
        $textFile = fopen($this->codeFileDir, "w");
        fwrite($textFile , $fileAsString);
        fclose($textFile);
    }

    public function reDirectToQuestion() {
        header("Location:http://localhost:8080/questions");
    }   
}
