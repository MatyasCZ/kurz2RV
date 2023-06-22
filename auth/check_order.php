<?php
require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/../validators/orderValidator.php");

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
        if(!$validator -> validateOrder($name, $surname, $email, $mobile, $street, $city, $postalCode, $carCleaning, $officeCleaning, $houseCleaning, $otherService))
        {
            header("Location: ../index.php");
            die();
        }
    }
}