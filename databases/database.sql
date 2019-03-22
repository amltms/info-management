CREATE TABLE Roles (
    RoleID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    RoleName varchar(255)
);

CREATE TABLE Users (
    UserID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FirstName varchar(255) NOT NULL,
    LastName varchar(255) NOT NULL,
    Password varchar(255) NOT NULL,
    PhoneNumber varchar(15),
    Email varchar(255) NOT NULL,
    Bio text,
    RoleID int NOT NULL,
    LecturerID int,
    Privacy int NOT NULL,
    FOREIGN KEY (RoleID) REFERENCES Roles(RoleID)
);

ALTER TABLE Users ADD CONSTRAINT fk_lecturer
    FOREIGN KEY (LecturerID) REFERENCES Users(UserID);


CREATE TABLE Messages (
    MessageID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    MessageTitle varchar(255),
    Message text NOT NULL,
    SenderID int NOT NULL,
    RecieverID int NOT NULL,
    MessageDate DATETIME NOT NULL,
    FOREIGN KEY (SenderID) REFERENCES Users(UserID),
    FOREIGN KEY (RecieverID) REFERENCES Users(UserID)
);



CREATE TABLE Meetings (
    MeetingID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Message varchar(255) NOT NULL,
    MeetingDate DATETIME NOT NULL,
    SenderID int NOT NULL,
    RecieverID int NOT NULL,
    FOREIGN KEY (SenderID) REFERENCES Users(UserID),
    FOREIGN KEY (RecieverID) REFERENCES Users(UserID)
);


DROP TABLE Meetings;
DROP TABLE Messages;
DROP TABLE Users;
DROP TABLE Roles;
