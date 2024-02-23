<?php
    $jsonResults = file_get_contents("./../Models/questions.json", "r"); 
    $questions = json_decode($jsonResults);
    $page = 'Questions';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
  <body
    onselectstart="return false"
    oncut="return false"
    oncopy="return false"
    onpaste="return false"
    ondrag="return false"
    ondrop="return false">
    <header class="header">
        <div class="title_container">
            <h1 class="title">AntiCheat</h1>
        </div>
    </header>
    <main>
        <div class="title_container">
            <h2 class="subTitle">Remplacer le ? par le mot marquant</h2>
        </div>
        <form action="receiveAnswers" method="POST" class="questions_form">
            <label for="question1">
                <?=$questions->{'question1'}->{'question'}?>
            </label>
            <input type="text" name="question1" id="question1" required>
            <label for="question2">
                <?=$questions->question2->question?>
            </label>
            <input type="text" name="question2" id="quesiton2" required>
            <label for="question3"><?=$questions->question3->question?></label>
            <input type="text" name="question3" id="questions3" required>
            <label for="question4"><?=$questions->question4->question?></label>
            <input type="text" name="question4" id="questions4" required>
            <label for="question5"><?=$questions->question5->question?></label>
            <input type="text" name="question5" id="questions5" required>
            <input type="submit" name="submit" id="submit" class="import_button">
        </form>
        <script>
            
        </script>
    </main>
    </body>
    </html>
    