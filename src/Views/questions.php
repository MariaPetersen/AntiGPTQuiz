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
    <form action="receiveAnswers" method="POST" enctype="multipart/form-data">
        <label for="">Réponse</label>
        <input type="text" name="test" id="test" required>
        <input type="submit" name="submit" id="submit">
    </form>
  </body>
</html>
