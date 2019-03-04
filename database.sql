CREATE TABLE User (
    StudentID int NOT NULL PRIMARY KEY,
    Password varchar(255) NOT NULL,
    FirstName varchar(255) NOT NULL,
    LastName varchar(255) NOT NULL,
    Email varchar(255) NOT NULL,
    Role varchar(255) NOT NULL,
    Lecturer varchar(255)
);
