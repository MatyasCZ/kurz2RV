<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/general.css" />
    <link rel="stylesheet" href="./CSS/prices.css" />
    <title>Ceník</title>
</head>

<body>
    <?php
    require_once(__DIR__."/Components/header.php");
    require_once(__DIR__."/Components/navigation.php");
    ?>
    <div class="prices-contain">
        <div class="table-prices">
            <h2>Orientační cenová tabulka</h2>
            <table>
                <thead>
                    <tr>
                        <td>Typ a rozsah práce</td>
                        <td>Cena</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Úklid domácností</td>
                        <td>od 50 Kč/m²</td>
                    </tr>
                    <tr>
                        <td>Úklid kanceláří</td>
                        <td>od 60 Kč/m²</td>
                    </tr>
                    <tr>
                        <td>Úklid společných prostor</td>
                        <td>od 65 Kč/m²</td>
                    </tr>
                    <tr>
                        <td>Tepování automobilů</td>
                        <td> od 2.000 Kč/ks</td>
                    </tr>
                    <tr>
                        <td>Dezinfekce prostor</td>
                        <td>od 100 Kč/m²</td>
                    </tr>
                    <tr>
                        <td>Čištění žaluzií</td>
                        <td>od 20 Kč/m²</td>
                    </tr>
                    <tr>
                        <td>Mytí oken a výloh</td>
                        <td>od 30 Kč/m²</td>
                    </tr>
                    <tr>
                        <td>Čištění čalounění</td>
                        <td>od 45 Kč/ks</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="words">
            <p>Pravidelné úklidy a velké objemy úklidových prací jsou kalkulovány individuálně a cena úklidu je stanovena dohodou. Pro přesné nacenění úklidů nás neváhejte kontaktovat. Ceník úklidových služeb, resp. ceník úklidových prací uvedený v tabulce je do určité míry orientační, neboť nezohledňuje výše zmíněné individuální podmínky s ohledem na typ a rozsah realizace úklidových úkonů a specifické požadavky zadavatele úklidu. Ceník jednotlivých úklidových prací je uveden v tabulce. Naše úklidová firma ceník pravidelně aktualizuje.</p>
        </div>
        <div class="letak"></div>
    </div>
    <?php
    require_once(__DIR__."/Components/footer.php");
    ?>
</body>

</html>