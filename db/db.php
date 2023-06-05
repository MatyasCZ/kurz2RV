<?php

$servername = "localhost";
$username = "root";
$password = "Zaverecnaprace";
$database = "kurz2rv";

$connection = new mysqli($servername, $username, $password, $database);

if($connection -> connect_error){
    die("Připojení selhalo: " . $connection -> connect_error);
}

?>