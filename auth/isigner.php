<?php

interface ISigner
{
    public function add_user(string $firstname, string $lastname, string $email, string $phone, string $street, string $town, string $postalcode, string $password, string $confirmPassword, string $rules, string $GDPR) : void;
    public function update_password(string $username, string $newPassword, string $confirmNewPassword) : void;
    public function delete_account(string $username) : void;
}

?>