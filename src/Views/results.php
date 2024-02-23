<?php
    $jsonResults = file_get_contents("./../Models/results.json", "r"); 
    $results = json_decode($jsonResults);
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
  <body>
    <header class="header">
        <div class="title_container">
            <h1 class="title">AntiCheat</h1>
        </div>
    </header>
    <main>
        <div class="title_container">
            <h2 class="subTitle">Vos résultats</h2>
        </div>
        <div class="results_container">
            <p>
                Question 1 : <? if($results->question1 === false)
                {
                    echo "FAUX !!";
                } else {
                    echo "Bravo !!";
                } ?>
            </p>
            <p>
                Question 2 : <?php if($results->question2===false){echo "FAUX !!";} else {echo "Bravo !!";} ?>
            </p>
            <p>
                Question 3 : <?php if($results->question3===false){echo "FAUX !!";} else {echo "Bravo !!";} ?>
            </p>
            <p>
                Question 4 : <?php if($results->question4===false){echo "FAUX !!";} else {echo "Bravo !!";} ?>
            </p>
            <p>
                Question 5 : <?php if($results->question5===false){echo "FAUX !!";} else {echo "Bravo !!";} ?>
            </p>
        </div>
    </main>
    </body>
    </html>
    