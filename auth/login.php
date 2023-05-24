<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/general.css"/>
    <link rel="stylesheet" href="../CSS/login.css"/>
    <title>Přihlášení</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/../kurz2RV/IMG/favicon-32x32.png"/>
</head>
<body>
<?php
require_once(__DIR__."/../Components/header.php");
require_once(__DIR__."/../Components/loginnavigation.php");
?>
 <div class="login">
        <h2>Přihlášení</h2>
        <form action="check_login.php" method="post">
            <label for="email">E-mail:</label>
            <input class="input1" type="email" name="username" required>
            <br>
            <label for="password">Heslo:</label>
            <input class="input1" type="password" name="password" required>
            <a href="./forgot.php">Zapomněl/a jste heslo?</a>
            <br><br>
            <input type="checkbox" name="remember" value="1">
            <label for="remember">Zapamatovat si mě</label>
            <br><br>
            <input class="login-input" type="submit" value="Přihlásit se" name="submit">
        </form>
        <br>
        <a href="../program.php">Chci se zaregistrovat</a>
    </div>
<?php
require_once(__DIR__."/../Components/footer.php");
?>
</body>
</html>