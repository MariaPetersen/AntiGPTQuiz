<?php 

class ReceiveAnswers {
    private $questionsPath;
    private $resultsPath;
    private $jsonString;
    private $jsonData;

    public function __construct($answers) {
        $this->questionsPath = __DIR__ . './../Models/questions.json';
        $this->resultsPath = __DIR__ . './../Models/results.json';
        $this->jsonString = file_get_contents($this->jsonPath);
        $this->jsonData = json_decode($this->jsonString);
        $this->answers = $answers;
    }

    private function checkAnswers() {
        $results = array();
        foreach ($this->answers as $id => $answer) {
            if($this->jsonData[$id] == $answer) {
                $this->results=>[$id] == true;
            } else {
                $this->results=>[$id] == false;
            }
        }
        return $results;
    }

    public function writeResultsToJson() {
        $results = $this->checkAnswers();
        $json = json_encode($results);
        $resultsFile = fopen($this->resultsPath, 'w');
        fwrite($resultsFile, $json);
        fclose($resultsFile);
    }

    public function reDirectToResults() {
        header("Location:http://localhost:8080/results");
    }   
}