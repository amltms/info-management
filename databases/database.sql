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
    University varchar(255),
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
    Subject varchar(255) NOT NULL,
    Location varchar(255) NOT NULL,
    MeetingDate DATETIME NOT NULL,
    SenderID int NOT NULL,
    RecieverID int NOT NULL,
    Approve bit,
    FOREIGN KEY (SenderID) REFERENCES Users(UserID),
    FOREIGN KEY (RecieverID) REFERENCES Users(UserID)
);

/*Insert Roles*/
INSERT INTO Roles (RoleName) VALUES ("Student");
INSERT INTO Roles (RoleName) VALUES ("Lecturer");
INSERT INTO Roles (RoleName) VALUES ("Admin");

INSERT INTO Users (FirstName,LastName,Password,PhoneNumber,University,Email,Bio,RoleID,Privacy)
VALUES ("Bob","Ross","test","07483639484","Bournemouth University","bross@bournemouth.ac.uk","Lecturer at BU",2,2);

INSERT INTO Users (FirstName,LastName,Password,PhoneNumber,University,Email,Bio,RoleID,LecturerID,Privacy)
VALUES ("Amal","Thomas","test2","07496462258","Bournemouth University","s5072239@bournemouth.ac.uk","Student at BU",1,1,1);

INSERT INTO Meetings (Subject,Location,MeetingDate,SenderID,RecieverID)
VALUES ("Test meeting","P205","2019-04-01 10:00:00",1,2);


INSERT INTO Messages (MessageTitle,Message,MessageDate,SenderID,RecieverID)
VALUES ("Test Message","HELLO hi","2019-04-01 10:00:00",1,2);

INSERT INTO Messages (MessageTitle,Message,MessageDate,SenderID,RecieverID)
VALUES ("Test Message2","HELLO hi2","2019-04-01 10:00:00",2,1);

DROP TABLE Meetings;
DROP TABLE Messages;
DROP TABLE Users;
DROP TABLE Roles;
