<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/general.css" />
    <link rel="stylesheet" href="./CSS/contact.css" />
    <title>Kontakty</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./IMG/favicon-32x32.png"/>
</head>

<body>
    <?php
    require_once(__DIR__."/Components/header.php");
    require_once(__DIR__."/Components/navigation.php");
    ?>
    <div class="contacts">
        <div class="base-info">
            <h2>Provozovatel:</h2>
            <p>Radim Vida<br>
                Topolová 236<br>
                370 05 Olešník<br>
                <br>
                Tel. číslo: + 420 723 882 928 <br>
                Webové stránky www.rvcleaning.cz<br>
                IČ: 12345678
            </p>
        </div>
        <div class="feedback">
    <h2>Napište nám:</h2>
    <form method="post" action="phpEmailFeedback.php" onsubmit="validate(this, event);">
        <div class="form-group">
            <label for="email">Váš email:</label><br>
            <input type="email" id="email" value="@" name="email">
        </div>

        <div class="form-group">
            <label for="subject">Předmět:</label><br>
            <input type="text" id="subject" value="Dotaz" name="subject">
        </div>

        <div class="form-group">
            <label for="textarea">Zpráva:</label><br>
            <textarea id="textarea" cols="60" rows="10" name="textarea"></textarea>
        </div>

        <div class="form-group">
            <label for="attachment">Příloha:</label><br>
            <input type="file" id="attachment">
        </div>

        <div class="form-group">
        <input type="submit" value="Odeslat e-mail" name="submit-form">
        </div>
    </form>
    </div>
    </div>
    <?php
    require_once(__DIR__."/Components/footer.php");
    ?>
</body>
<script src="./validators/requiredValidator.js"></script>
<script src="./validators/emailValidator.js"></script>
<script src="./validators/feedbackValidator.js"></script>
<script src="./JS/feedback.js"></script>
</html>