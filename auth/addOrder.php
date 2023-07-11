<?php
class Order
{
    private mysqli $connection;
    private const TABLE_NAME = "ORDERS";
    
    public function __construct(mysqli $conn)
    {
        $this->connection = $conn;
    }
    
    public function add_order(string $name, string $surname, string $email, string $mobile, string $street, string $city, string $postalcode, string $carCleaning, string $officeCleaning, string $houseCleaning, string $otherService, string $orderdate, string $userid): void
    {
        $stmt = $this->connection->prepare("INSERT INTO " . self::TABLE_NAME . "(Name, Surname, Email, Mobile, Street, City, PostalCode, CarCleaning, OfficeCleaning, HouseCleaning, OtherService, OrderDate, UserId) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssss", $name, $surname, $email, $mobile, $street, $city, $postalcode, $carCleaning, $officeCleaning, $houseCleaning, $otherService, $orderdate, $userid);
        
        if (!$stmt->execute()) {
            throw new Exception("Přidání nové objednávky selhalo.");
        }
        
        $stmt->close();
    }

    public function __destruct()
    {
        $this->connection->close();
    }
}
?>