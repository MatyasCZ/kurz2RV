<?php

class Order 
{
    public int $ID;
    public string $Name;
    public string $Surname;
    public string $Email;
    public string $Mobile;
    public string $Street;
    public string $City;
    public string $PostalCode;
    public bool $CarCleaning;
    public bool $OfficeCleaning;
    public bool $HouseCleaning;
    public ?string $OtherService;
    public DateTime $OrderDate;
    public int $UserId;
    
    public function __construct()
    {
        $this->OrderDate = new DateTime();
    }
}

?>