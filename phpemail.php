<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

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
        $mail->Password = 'dnlzvlhnczcttcyx';
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
        echo 'E-mail byl úspěšně odeslán.';
    } catch (Exception $e) {
        echo 'Došlo k chybě při odesílání e-mailu: ' . $mail->ErrorInfo;
    }
}

?>