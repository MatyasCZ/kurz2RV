<?php

class OrderValidator
{
    public function validateOrder(string $name, string $surname, string $email, string $mobile, string $street, string $city, string $postalCode, bool $carCleaning, bool $officeCleaning, bool $houseCleaning, string $otherService): bool
    {
        return $this->validateName($name) &&
            $this->validateName($surname) &&
            $this->validateEmail($email) &&
            $this->validateMobile($mobile) &&
            $this->validateStreet($street) &&
            $this->validateCity($city) &&
            $this->validatePostalCode($postalCode) &&
            $this->validateOtherService($otherService);
        // You can include additional validation rules specific to the order form fields
    }

    private function validateName(string $name): bool
    {
        return preg_match('/^[a-zA-Z]+$/', $name);
    }

    private function validateEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    private function validateMobile(string $mobile): bool
    {
        return preg_match('/^\d{9}$/', $mobile);
    }

    private function validateStreet(string $street): bool
    {
        return !empty($street);
    }

    private function validateCity(string $city): bool
    {
        return !empty($city);
    }

    private function validatePostalCode(string $postalCode): bool
    {
        return preg_match('/^\d{5}$/', $postalCode);
    }

    private function validateOtherService(string $otherService): bool
    {
        return !empty($otherService);
    }
}
?>