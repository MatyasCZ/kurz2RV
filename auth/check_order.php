<?php
require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/../validators/orderValidator.php");
require_once(__DIR__."/addOrder.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/vendor/phpmailer/phpmailer/src/Exception.php';
require '../PHPMailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../PHPMailer/vendor/phpmailer/phpmailer/src/SMTP.php';
require '../PHPMailer/vendor/autoload.php';

if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $postalcode = $_POST['postalcode'];
    $services = array();

    if (isset($_POST['ch1'])) {
        $services[] = 'Čištění vozidla';
    }
    if (isset($_POST['ch2'])) {
        $services[] = 'Úklid kanceláře';
    }
    if (isset($_POST['ch3'])) {
        $services[] = 'Úklid domácnosti';
    }

    $stuff = $_POST['stuff'];

    $mail = new PHPMailer(true);
    try {
        // Nastavení SMTP parametrů
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mmaly966@gmail.com';
        $mail->Password = 'secret';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Nastavení informací o odesílateli a příjemci
        $mail->setFrom($email);
        $mail->addAddress('mmaly966@gmail.com');

        // Nastavení obsahu e-mailu
        $mail->isHTML(true);
        $mail->Subject = 'Nová objednávka';
        $mail->Body = "
            <h2>Nová objednávka</h2>
            <p>Jméno: $name</p>
            <p>Příjmení: $surname</p>
            <p>E-mail: $email</p>
            <p>Telefon: $mobile</p>
            <h3>Fakturační adresa</h3>
            <p>Ulice a číslo popisné: $street</p>
            <p>Město: $city</p>
            <p>PSČ: $postalcode</p>
            <h3>Mám zájem o:</h3>
            <ul>
                <li>" . implode("</li><li>", $services) . "</li>
            </ul>
            <h3>Poznámka:</h3>
            <p>$stuff</p>";

        // Odeslání e-mailu
        $mail->send();
        echo '<script>window.alert("Objednávka byla úspěšně odeslána."); window.location.href = "../index.php";</script>';
    } catch (Exception $e) {
        echo '<script>window.alert("Došlo k chybě při odesílání objednávky: ' . $mail->ErrorInfo . '"); window.location.href = "../index.php";</script>';
    }
}

if(isset($_POST["Submit"]))

{
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $postalCode = $_POST["postalcode"];
    $carCleaning = isset($_POST["ch1"]) ? true : false;
    $officeCleaning = isset($_POST["ch2"]) ? true : false;
    $houseCleaning = isset($_POST["ch3"]) ? true : false;
    $otherService = $_POST["stuff"];
    if(isset($name) && isset($surname) && isset($email) && isset($mobile) && isset($street) && isset($city) && isset($postalCode) && isset($otherService)
    && !empty($name) && !empty($surname) && !empty($email) && !empty($mobile) && !empty($street) && !empty($city) && !empty($postalCode) && !empty($otherService))
    {
        $validator = new OrderValidator();
        if(!$validator -> validateOrder($name, $surname, $email, $mobile, $street, $city, $postalCode, $carCleaning, $officeCleaning, $houseCleaning, $otherService));
        
        $addOrder = new Order($connection);
        $addOrder -> add_order($name, $surname, $email, $mobile, $street, $city, $postalcode, $carcleaning, $officecleaning, $housecleaning, $otherservice, $orderdate, $userid);
    }
}