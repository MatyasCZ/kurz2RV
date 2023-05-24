<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/general.css" />
    <link rel="stylesheet" href="./CSS/order.css" />
    <title>Objednávka</title>
</head>

<body>
    <?php
    require_once(__DIR__."/Components/header.php");
    require_once(__DIR__."/Components/navigation.php");
    ?>
    <div class="order-contain">
        <div class="info">
            <p>Oslovily vás naše služby? Poptáváte úklid domácnosti nebo firmy ? Napište nám a my vám rádi zašleme kompletní nabídku. Jde o nezávaznou poptávku/objednávku, která je ZDARMA! Pokud vám podmínky nebudou vyhovovat nic se neděje, uvidíme se třeba příště, pokud ano, už nyní se těšíme na spolupráci.
            </p>
            <br>
            <div class="foto2"></div>
        </div>
        <div class="order-form">
            <h2>Nezávazná objednávka</h2>
            <form action="post" method="post" target="_self">
                <h3>Osobní údaje</h3>

                <label for="name">Jméno:</label>
                <input id="name" type="name" placeholder="např. Petr" required>

                <label for="surname">Příjmení:</label>
                <input id="surname" type="surname" placeholder="např. Novák" required>
                <br><br>
                <label for="email">E-mail:</label>
                <input id="email" type="email" placeholder="např. petr.novak@seznam.cz" required>

                <label for="mobile">Telefonní číslo:</label>
                <input id="mobile" type="number" placeholder="např. 123456789" required>

                <h3>Fakturační adresa</h3>

                <label id="street" for="street">Ulice a číslo popisné:</label>
                <input id="street" type="street" required>
                <br><br>
                <label id="city" for="city">Město:</label>
                <input id="city" type="city" required>
                <br><br>
                <label id="postalcode" for="postalcode">PSČ:</label>
                <input id="postalcode" type="postalcode" required>

                <h3>Mám zájem o:</h3>

                <label for="ch1">Čištění vozidla</label>
                <input id="ch1" type="checkbox">

                <label for="ch2">Úklid kanceláře</label>
                <input id="ch2" type="checkbox">

                <label for="ch3">Úklid domácnosti</label>
                <input id="ch3" type="checkbox">
                <br><br>
                <label for="stuff">Pokud máte zájem o jinou službu uveďte o kterou:</label><br>
                <textarea name="stuff" id="stuff" cols="60" rows="15"></textarea>
                <br>
                <button class="order-submit" id="submit" type="submit">Odeslat objednávku</button>
                <button class="order-reset" id="reset" type="reset">Vymazat údaje</button>
            </form>
        </div>
        <div class="foto3"></div>
    </div>
    <?php
    require_once(__DIR__."/Components/footer.php");
    ?>
</body>

</html>