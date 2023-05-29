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
            <form action="post" method="post" onsubmit="validateForm(event)">
                <label for="email">Váš email:</label><br>
                <input type="email" id="email" value="@">
                <br><br>
                <label for="subject">Předmět:</label><br>
                <input type="text" value="Dotaz">
                <br><br>
                <label for="text">Zpráva:</label><br>
                <textarea name="textarea" id="textarea" cols="60" rows="10"></textarea>
                <br><br>
                <label for="attachment">Příloha:</label><br>
                <input type="file" name="attachment" id="Attachment">
                <br><br>
                <input type="submit" value="Odeslat e-mail" name="submit">
            </form>
        </div>
    </div>
    <?php
    require_once(__DIR__."/Components/footer.php");
    ?>
</body>

</html>