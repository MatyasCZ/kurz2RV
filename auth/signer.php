<?php
require_once(__DIR__."/isigner.php");
require_once(__DIR__."/crypt.php");

class Signer implements ISigner 
{
    private mysqli $connection;
    private const TABLE_NAME = "USERS";
    private Crypt $crypt;

    public function __construct(mysqli $conn)
    {
        $this -> connection = $conn;
        $this -> crypt = new Crypt();
    }

    public function add_user(string $firstname, string $lastname, string $email, string $phone, string $street, string $town, string $postalcode, string $password, string $confirmPassword, string $rules, string $GDPR) : void
    {
        if($password === $confirmPassword)
        {
            $encrypted_password = $this -> crypt -> encrypt($password);
            $sql = "INSERT INTO ".self::TABLE_NAME."(FirstName, LastName, Email, phone, street, town, postalcode, password, rules, GDPR)VALUES('$firstname', '$lastname', '$email', '$phone', '$street', '$town', '$postalcode', '$encrypted_password', '$rules', '$GDPR');";
            if(!$this -> connection -> query($sql))
            {
                throw new Exception("Přidání nového uživatele selhalo.");
            }
        }
        return;
    }

    public function update_password(string $username, string $newPassword, string $confirmNewPassword) : void
    {
        if($newPassword === $confirmNewPassword)
        {
            $encrypted_password = $this -> crypt -> encrypt($newPassword);
            $sql = "UPDATE ".self::TABLE_NAME." SET password = '$encrypted_password' WHERE Email = '$username'";
            if(!$this -> connection -> query($sql))
            {
                throw new Exception("Aktualizace hesla selhala.");
            }
            return;
        }
    }

    public function delete_account(string $username) : void
    {
        $sql = "DELETE FROM ".self::TABLE_NAME." WHERE UserName = '$username'";
        if(!$this -> connection -> query($sql))
        {
            throw new Exception("Odstranění účtu selhalo.");
        }
        return;
    }

    public function __destruct()
    {
        $this -> connection -> close();
    }
}

?>