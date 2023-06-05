<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/general.css"/>
    <link rel="stylesheet" href="../CSS/login.css"/>
    <title>Obnova hesla</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/../kurz2RV/IMG/favicon-32x32.png"/>
</head>
<body>
<?php
require_once(__DIR__."/../Components/header.php");
require_once(__DIR__."/../Components/loginnavigation.php");
?>
<div class="login">
    <h2>Obnova hesla</h2>
    <form action="update_password.php" method="post" onsubmit="validate(document.getElementsByTagName('form')[0], event);">
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input class="input1" type="email" name="username" id="">
    </div>

    <div class="form-group">
        <label for="password">Nové heslo:</label>
        <input class="input1" type="password" name="new_password" id="">
    </div>

    <div class="form-group">
        <label for="password">Potvrdit nové heslo:</label>
        <input class="input1" type="password" name="confirm_new_password" id="">
    </div>

    <div class="form-group">
        <input class="new-password"type="submit" value="Obnovit heslo" name="update_password">
    </div>
    </form>
    <a href="./login.php">Zpět na přihlášení</a>
    </div>
    <?php
require_once(__DIR__."/../Components/footer.php");
?>
</body>
<script src="../validators/passwordValidator.js"></script>
<script src="../validators/requiredValidator.js"></script>
<script src="../validators/emailValidator.js"></script>
<script src="../validators/forgotValidator.js"></script>
<script src="../JS/forgot.js"></script>
</html>