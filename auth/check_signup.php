<?php
require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/../validators/signupValidator.php");
require_once(__DIR__."/signer.php");

if(isset($_POST["Submit"]))
{
    $firstName = $_POST["FirstName"];
    $lastName = $_POST["LastName"];
    $email = $_POST["Email"];
    $phone = $_POST["phone"];
    $street = $_POST["street"];
    $town = $_POST["town"];
    $postalcode = $_POST["postalcode"];
    $password = $_POST["password"];
    $confirmPassword = $_POST ["password-confirmation"];
    $rules = $_POST["rules"];
    $GDPR = $_POST["GDPR"];
    if(isset($firstName) && isset($lastName) && isset($email) && isset($phone) && isset($street) && isset($town) && isset($postalcode) && isset($password) 
        && isset($confirmPassword) && isset($rules) && isset($GDPR) &&
       !empty($firstName) && !empty($lastName) && !empty($email) && !empty($phone) && !empty($street) && !empty($town) && !empty($postalcode) && !empty($password) && !empty($confirmPassword) &&
       !empty($rules) && !empty($GDPR))
       {
        $validator = new SignUpValidator();
        if(!$validator -> validateSignup($firstName, $lastName, $email, $phone, $street, $town, $postalcode, $password, $confirmPassword, $rules, $GDPR))
        {
            header("Location: ../program.php");
            die();
        }
        $signer = new Signer($connection);
        $signer -> add_user($firstName, $lastName, $email, $phone, $street, $town, $postalcode, $password, $confirmPassword, $rules, $GDPR);
        header("Location: login.php");
        die();
    }
}

?>