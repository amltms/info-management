CREATE TABLE User (
    UserID int NOT NULL PRIMARY KEY,
    FirstName varchar(255) NOT NULL,
    LastName varchar(255) NOT NULL,
    Password varchar(255) NOT NULL,
    Email varchar(255) NOT NULL,
    Role int NOT NULL,
    Lecturer varchar(255)
);


CREATE TABLE Message (
    UserID int NOT NULL PRIMARY KEY,
    Message varchar(255) NOT NULL,
    Reciever
);

CREATE TABLE Meetings (
    UserID int NOT NULL PRIMARY KEY,
    Message varchar(255) NOT NULL,
    Reciever
);
