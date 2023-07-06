CREATE DATABASE KURZ2RV;

DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
ID int PRIMARY KEY AUTO_INCREMENT,
FirstName varchar(100) NOT NULL,
LastName varchar(100) NOT NULL,
Email varchar(100) NOT NULL,
Phone varchar(20) NOT NULL,
Street varchar(200) NOT NULL,
Town varchar(100) NOT NULL,
PostalCode varchar(10) NOT NULL,
Password varchar(100) NOT NULL,
Rules tinyint(1) NOT NULL,
GDPR tinyint(1) NOT NULL,
OrderCount int DEFAULT 0
);

DROP TABLE IF EXISTS Orders;
CREATE TABLE Orders (
ID int PRIMARY KEY AUTO_INCREMENT,
Name varchar(100) NOT NULL,
Surname varchar(100) NOT NULL,
Email varchar(100) NOT NULL,
Mobile varchar(20) NOT NULL,
Street varchar(200) NOT NULL,
City varchar(100) NOT NULL,
PostalCode varchar(10) NOT NULL,
CarCleaning bit NOT NULL,
OfficeCleaning bit NOT NULL,
HouseCleaning bit NOT NULL,
OtherService text,
OrderDate datetime DEFAULT CURRENT_TIMESTAMP,
UserId int NULL,
CONSTRAINT fk_order_user
FOREIGN KEY (UserId) REFERENCES Users(Id)
ON DELETE CASCADE
ON UPDATE CASCADE
);

DELIMITER //
CREATE TRIGGER update_order_count AFTER INSERT ON Orders
FOR EACH ROW
BEGIN
UPDATE Users
SET OrderCount = OrderCount + 1
WHERE ID = NEW.UserId;
END //
DELIMITER ;