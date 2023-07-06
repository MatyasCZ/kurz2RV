<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/vendor/phpmailer/phpmailer/src/Exception.php';
require './PHPMailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './PHPMailer/vendor/phpmailer/phpmailer/src/SMTP.php';
require './PHPMailer/vendor/autoload.php';

if (isset($_POST['submit-form'])) {
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['textarea'];

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
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Odeslání e-mailu
        $mail->send();
    echo '<script>window.alert("E-mail byl úspěšně odeslán."); window.location.href = "index.php";</script>';
} catch (Exception $e) {
    echo '<script>window.alert("Došlo k chybě při odesílání e-mailu: ' . $mail->ErrorInfo . '"); window.location.href = "index.php";</script>';
}
}
?>