<!DOCTYPE html>
<html>
  <body>
    <p>
        <?php
            echo 'This is the'
        ?>
    </p>
    <form action="receiveFile" method="POST" enctype="multipart/form-data">
        <label for="fileToUpload">Fichier</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <input type="submit" name="submit" id="submit">
    </form>
  </body>
</html>

