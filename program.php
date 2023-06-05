<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/general.css" />
    <link rel="stylesheet" href="./CSS/program.css" />
    <title>Věrnostní program</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./IMG/favicon-32x32.png"/>
</head>

<body>
    <?php
    require_once(__DIR__."/Components/header.php");
    require_once(__DIR__."/Components/navigation.php");
    ?>
    <div class="program-contain">
        <div class="program-form">
            <h2>Registrační formulář do věrnostního programu</h2>
            <form action="./auth/check_signup.php" method="post" onsubmit="validate(this, event);">
                <div class="registration">
                    <div class="column">
                        <div>
                            <label for="FirstName">Jméno *</label>
                            <input class="input1" id="FirstName" type="text" name="FirstName">
                        </div>

                        <div>
                            <label for="LastName">Příjmení *</label>
                            <input class="input1" id="LastName" type="text" name="LastName">
                        </div>

                        <div>
                            <label for="email">E-mail *</label>
                            <input class="input1" type="email" name="email" id="email" name="UserName">
                        </div>

                        <div>
                            <label for="phone">Telefon *</label>
                            <input class="input1" type="number" name="phone" id="phone" name="phone">
                        </div>

                        <div>
                            <label for="street">Ulice a č.p. *</label>
                            <input class="input1" id="street" type="street" name="street">
                        </div>
                    </div>

                    <div class="column">
                        <div>
                            <label for="town">Město *</label>
                            <input class="input1" id="town" type="town" name="town">
                        </div>

                        <div>
                            <label for="postalcode">PSČ *</label>
                            <input class="input1" id="postalcode" type="postalcode" name="postalcode">
                        </div>

                        <div>
                            <label for="password">Heslo *</label>
                            <input class="input1" type="password" name="password" id="password">
                        </div>

                        <div>
                            <label for="password-confirmation">Potvrzení hesla *</label>
                            <input class="input1" type="password" name="password-confirmation" id="password-confirmation">
                        </div>
                    </div>
                </div>

                <div class="checkboxes">
                    <div>
                        <input type="checkbox" name="rules" id="rules">
                        <label style="flex-basis: 80% !important;" for="rules">Souhlasím s pravidly Věrnostního programu *</label>
                    </div>

                    <div>
                        <input type="checkbox" name="GDPR" id="GDPR">
                        <label style="flex-basis: 80% !important;" for="GDPR">Souhlasím se zpracováním osobních údajů *</label>
                    </div>
                </div>

                <p>* Povinný údaj</p>
                <input class="register" type="submit" value="Registrovat se" name="Submit">
            </form>
        </div>
        <div class="program-info">
            <h2>Věrnostní program</h2>
            <p>Věrnostní program umožňuje zákazníkům získávat jedinečné výhody při opakovaných nákupech, a to zejména získáváním věrnostních bodů za jednotlivé nákupy, popřípadě jiných uvedených na internetových stránkách provozovatele www.RVcleaning.cz. Provozovatel si vyhrazuje právo omezit nebo pozastavit načítání věrnostních bodů. Omezení či pozastavení načítání věrnostních bodů bude zveřejněno na internetových stránkách provozovatele www.RVcleaning.cz</p>
            <p>Za jednu objednávku získáváte 10 věrnostních bodů. Při dosažení 100 věrnostních bodů získáváte slevu 30 % na další objednávku.</p>
            <p>Přihlásit se do věrnostního programu můžete po vyplnění registračního formuláře. Přihlašovací okno naleznete na úvodní internetové stránce RV Cleaning.</p>
        </div>
    </div>
    <?php
    require_once(__DIR__."/Components/footer.php");
    ?>
</body>
<script src="./validators/passwordValidator.js"></script>
<script src="./validators/requiredValidator.js"></script>
<script src="./validators/emailValidator.js"></script>
<script src="./validators/signupValidator.js"></script>
<script src="./JS/signup.js"></script>
</html>