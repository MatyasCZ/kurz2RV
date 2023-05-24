<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/general.css"/>
    <link rel="stylesheet" href="../CSS/login.css"/>
    <title>Obnova hesla</title>
</head>
<body>
<?php
require_once(__DIR__."/../Components/header.php");
require_once(__DIR__."/../Components/loginnavigation.php");
?>
<div class="login">
    <h2>Obnova hesla</h2>
    <form action="update_password" method="post">
        <label for="email">E-mail:</label>
        <input class="input1" type="email" name="username">
        <br>
        <label for="password">Nové heslo:</label>
        <input class="input1" type="password" name="new_password">
        <br>
        <label for="password">Potvrdit nové heslo:</label>
        <input class="input1" type="password" name="confirm_new_password">
        <br>
        <input class="new-password"type="submit" value="Obnovit heslo" name="update_password">
    </form>
    <br>
    <a href="./login.php">Zpět na přihlášení</a>
    </div>
    <?php
require_once(__DIR__."/../Components/footer.php");
?>
</body>
</html>