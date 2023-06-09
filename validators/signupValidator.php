<?php
require_once(__DIR__."/loginValidator.php");

class SignUpValidator extends LoginValidator
{
    public function validateSignup(string $name, string $surname, string $email, string $phone, string $street, string $town, string $postalcode, string $password, string $confirmPassword, string $rules, string $GDPR) : bool{
        return $this -> validateName($name) &&
                $this -> validateName($surname) &&
                parent::validateCredentials($email, $password) &&
                parent::validateCredentials($email, $confirmPassword) &&
                $this -> validateConfirmPassword($password, $confirmPassword) &&
                $this -> validatePhone($phone) &&
                $this -> validateStreet($street) &&
                $this -> validateTown($town) &&
                $this -> validatePostalCode($postalcode) &&
                $this -> validateRules($rules) &&
                $this -> validateGDPR($GDPR);
    }

    private function validateConfirmPassword(string $password, string $confirmPassword) : bool{
        return $password === $confirmPassword;
    }

    private function validateName(string $name) : bool{
        return preg_match('/[a-zA-Z]/', $name);
    }

    private function validatePhone(string $phone) : bool {
        return preg_match('/^\d{9}$/', $phone);
    }

    private function validateStreet(string $street) : bool {
        return !empty($street);
    }

    private function validateTown(string $town) : bool {
        return !empty($town);
    }

    private function validatePostalCode(string $postalCode) : bool {
        return preg_match('/^\d{5}$/', $postalCode);
    }

    private function validateRules(bool $rules) : bool {
        return $rules;
    }

    private function validateGDPR(bool $GDPR) : bool {
        return $GDPR;
    }
}

?>