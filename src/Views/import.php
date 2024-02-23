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
        <div class="instruction_container">
            <p class="instruction">Importer le ficher de code sur lequel vous voulez tester vos élèves !</p>
        </div>
        <dis class="import_form_container">
            <form action="receiveFile" method="POST" enctype="multipart/form-data" class="import_form">
                <label for="fileToUpload" class="import_label">Choisissez votre fichier en cliquant ici</label>
                <input type="file" name="fileToUpload" id="fileToUpload" class="import_input" required>
                <input type="submit" name="submit" id="submit" class="import_button">
            </form>
        </dis>
    </main>
    <footer></footer>
</body>

</html>