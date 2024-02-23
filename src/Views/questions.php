<?php
    $page = 'Questions';
?>
<!DOCTYPE html>
<html>
  <body>
    <p><?php
    echo 'This is the page ' . $page;
    ?>
    </p>
    <form action="receiveAnswers" method="POST">
        <label for="question1">Réponse</label>
        <input type="text" name="question1" id="question1" required>
        <label for="question2">Réponse</label>
        <input type="text" name="question2" id="quesiton2" required>
        <label for="question3">Réponse</label>
        <input type="text" name="question3" id="questions3" required>
        <label for="question4">Réponse</label>
        <input type="text" name="question4" id="questions4" required>
        <label for="question5">Réponse</label>
        <input type="text" name="question5" id="questions5" required>
        <input type="submit" name="submit" id="submit">
    </form>
  </body>
</html>
