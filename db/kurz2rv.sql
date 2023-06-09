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

DROP TABLE IF EXISTS Groups;
CREATE TABLE Groups (
Id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
Name varchar(500) NOT NULL,
CreatedOn datetime NOT NULL,
UpdatedOn datetime NULL,
UserId int NOT NULL,
CONSTRAINT fk_group_user
FOREIGN KEY (UserId) REFERENCES Users(Id)
ON DELETE CASCADE
ON UPDATE CASCADE
);

DROP TABLE IF EXISTS Items;
CREATE TABLE Items (
Id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
Content varchar(5000) NOT NULL,
Done bit NOT NULL,
CreatedOn datetime NOT NULL,
UpdatedOn datetime NULL,
GroupId int NOT NULL,
CONSTRAINT fk_item_group
FOREIGN KEY (GroupId) REFERENCES Groups(Id)
ON DELETE CASCADE
ON UPDATE CASCADE
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
UserId int NOT NULL,
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