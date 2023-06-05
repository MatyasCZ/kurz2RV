CREATE DATABASE KURZ2RV;

DROP TABLE IF EXISTS Users;
CREATE TABLE Users(
	Id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Username varchar(100) NOT NULL,
	Password varchar(500) NOT NULL,
	FirstName varchar(100) NOT NULL,
	LastName varchar(200) NOT NULL,
    OrderCount int DEFAULT 0
);

DROP TABLE IF EXISTS Groups;
CREATE TABLE Groups(
	Id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Name varchar(500) NOT NULL,
	CreatedOn datetime NOT NULL,
	UpdatedOn datetime NULL,
	UserId int NOT NULL,
    CONSTRAINT `fk_group_user` 
    	FOREIGN KEY (UserId) REFERENCES Users(Id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

DROP TABLE IF EXISTS Items;
CREATE TABLE Items(
	Id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Content varchar(5000) NOT NULL,
	Done bit NOT NULL,
	CreatedOn datetime NOT NULL,
	UpdatedOn datetime NULL,
	GroupId int NOT NULL,
    CONSTRAINT `fk_item_group` 
    	FOREIGN KEY (GroupId) REFERENCES Groups(Id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);