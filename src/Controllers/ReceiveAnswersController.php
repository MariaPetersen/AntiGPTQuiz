<?php 

class ReceiveAnswers {
    private $questionsPath;
    private $resultsPath;
    private $jsonString;
    private $jsonData;

    public function __construct() {
        $this->questionsPath = __DIR__ . './../Models/questions.json';
        $this->resultsPath = __DIR__ . './../Models/results.json';
        $this->jsonString = file_get_contents($this->questionsPath);
        $this->jsonData = json_decode($this->jsonString);
        $this->answers = $this->setAnswersObject();
    }

    private function setAnswersObject() {
        $answers = new stdClass();
        $answers->question1 = $_POST["question1"];
        $answers->question2 = $_POST["question2"];
        $answers->question3 = $_POST["question3"];
        $answers->question4 = $_POST["question4"];
        $answers->question5 = $_POST["question5"];
        return $answers;
    }

    private function checkAnswers() {
        $results = new stdClass();
        foreach ($this->answers as $id => $answer) {
            if($this->jsonData->$id->answer == $answer) {
                $results->$id = true;
            } else {
                $results->$id = false;
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