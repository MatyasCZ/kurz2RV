<?php
session_start();

require_once(__DIR__."/auth/check_cookie.php");
require_once(__DIR__."/auth/auth.php");
require_once(__DIR__."/db/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/general.css" />
    <title>RV cleaning</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./IMG/favicon-32x32.png"/>
</head>

<body>
<div class="page">
        <header>
            <div class="logo"></div>
            <div class="mobile"> Jan Novák, tel.: +420 723 882 928</div>
        </header>
        <nav>
            <a class="home" href="index.php"></a>
            <a class="navitem" href="order.php">Objednávka</a>
            <a class="navitem" href="services.php">Služby</a>
            <a class="navitem" href="prices.php">Ceník</a>
            <a class="navitem" href="program.php">Věrnostní program</a>
            <a class="navitem" href="contact.php">Kontakty</a>
        </nav>
        <br><br>
        <section>
            <div class="main">
            <div class="log">
            <?php
            if(isset($_SESSION["email"])) {
            // Uživatel je přihlášen
            echo '<form action="auth/logout.php" method="post">
            <input class="buttons" type="submit" value="Odhlásit se" name="logout">
                </form>';
            echo '<form action="auth/delete_account.php" method="post">
            <input class="buttons" type="submit" value="Smazat účet" name="delete_account">
            </form>';
            } else {
            // Uživatel není přihlášen
            echo '<form action="auth/login.php" method="post">
            <input class="buttons" type="submit" value="Přihlásit se" name="login">
            </form>';
            echo '<form action="program.php" method="post">
            <input class="buttons" type="submit" value="Zaregistrovat se" name="register">
            </form>';
            }
            ?>
            </div>
            <div class="content" name="content">
            <?php
                if (isset($_SESSION["email"])) {
                    // Uživatel je přihlášen
                    $username = $_SESSION["email"];
                    echo '<div class="welcome">Vítejte, ' . $username . '!</div>';
                }
            ?>
                <h1>Vítejte na webových stránkách RV CLEANING!</h1>
                <p>Zabýváme se profesionálním čištěním a úklidem všeho
                    druhu
                    zejména vozidel, ale také domácností, kanceláří či
                    jiných společných prostor.</p>
                <p>Kontaktovat mě můžete prostřednictvím mobilu, e-mailu
                    anebo vyplněním objednávky na této webové stránce.</p>
            </div>
            <div class="foto1"></div>
    </div>
    </section>
    </div>
    <footer>
        <div class="logo"></div>
        <div class="mobile"> Jan Novák, tel.: +420 723 882 928</div>
    </footer>
</body>
</html>