use containerdb;

DROP TABLE IF EXISTS Contact;
DROP TABLE IF EXISTS Booking;
DROP TABLE IF EXISTS Feedback;
DROP TABLE IF EXISTS Info;

CREATE TABLE IF NOT EXISTS Contact (
  CID int(10) AUTO_INCREMENT,
  Name varchar(25) NOT NULL,
  PhoneNumber varchar(12) NOT NULL,
  Email varchar(30) NOT NULL,
  Enquiry varchar(250) NOT NULL,
  PRIMARY KEY (CID)
) AUTO_INCREMENT = 1;



CREATE TABLE IF NOT EXISTS Booking (
  BkID int(10) AUTO_INCREMENT,
  Name varchar(25) NOT NULL,
  CarRego varchar(6) NOT NULL,
  PhoneNumber varchar(12) NOT NULL,
  Email varchar(30) NOT NULL,
  info varchar(250) NOT NULL,
  PRIMARY KEY (BkID)
) AUTO_INCREMENT = 1;

CREATE TABLE IF NOT EXISTS Feedback (
  FbID int(10) AUTO_INCREMENT,
  Name varchar(25) NOT NULL,
  PhoneNumber varchar(12) NOT NULL,
  Email varchar(30) NOT NULL,
  Feedback varchar(250) NOT NULL,
  PRIMARY KEY (FbID)
) AUTO_INCREMENT = 1;

CREATE TABLE IF NOT EXISTS Info
(
    InfoID int(10),
    Title varchar(100),
    Info TEXT,
    ImageURL varchar(255),
    PRIMARY KEY (InfoID)
);

INSERT INTO Booking(Name, CarRego, PhoneNumber, Email, info) VALUES ("Bob","agd333","0272245252","bob@gmail.com","modifications");
INSERT INTO Booking(Name, CarRego, PhoneNumber, Email, info) VALUES ("Bobby","agb333","0271245252","bobby@gmail.com","modifications");
INSERT INTO Booking(Name, CarRego, PhoneNumber, Email, info) VALUES ("Bobby","agb333","0271245252","bobby@gmail.com","modifications");
INSERT INTO Booking(Name, CarRego, PhoneNumber, Email, info) VALUES ("Bobby","agb333","0271245252","bobby@gmail.com","modifications");
INSERT INTO Booking(Name, CarRego, PhoneNumber, Email, info) VALUES ("Bobby","agb333","0271245252","bobby@gmail.com","modifications");
INSERT INTO Booking(Name, CarRego, PhoneNumber, Email, info) VALUES ("Bobby","agb333","0271245252","bobby@gmail.com","modifications");

INSERT INTO Contact(Name, PhoneNumber, Email, Enquiry) VALUES ("Bobby","0271245252","bobby@gmail.com","book my car for a wof");
INSERT INTO Contact(Name, PhoneNumber, Email, Enquiry) VALUES ("Bobby","0271245252","bobby@gmail.com","book my car for a wof");
INSERT INTO Contact(Name, PhoneNumber, Email, Enquiry) VALUES ("Bobby","0271245252","bobby@gmail.com","book my car for a wof");
INSERT INTO Contact(Name, PhoneNumber, Email, Enquiry) VALUES ("Bobby","0271245252","bobby@gmail.com","book my car for a wof");
INSERT INTO Contact(Name, PhoneNumber, Email, Enquiry) VALUES ("Bobby","0271245252","bobby@gmail.com","book my car for a wof");
INSERT INTO Contact(Name, PhoneNumber, Email, Enquiry) VALUES ("Bobby","0271245252","bobby@gmail.com","book my car for a wof");

INSERT INTO Feedback(Name, PhoneNumber, Email, Feedback) VALUES ("Bobby","0271245252","bobby@gmail.com","quality work");
INSERT INTO Feedback(Name, PhoneNumber, Email, Feedback) VALUES ("Bobby","0271245252","bobby@gmail.com","quality work");
INSERT INTO Feedback(Name, PhoneNumber, Email, Feedback) VALUES ("Bobby","0271245252","bobby@gmail.com","quality work");
INSERT INTO Feedback(Name, PhoneNumber, Email, Feedback) VALUES ("Bobby","0271245252","bobby@gmail.com","quality work");
INSERT INTO Feedback(Name, PhoneNumber, Email, Feedback) VALUES ("Bobby","0271245252","bobby@gmail.com","quality work");
INSERT INTO Feedback(Name, PhoneNumber, Email, Feedback) VALUES ("Bobby","0271245252","bobby@gmail.com","quality work");

INSERT INTO Info (InfoID, Title, Info, ImageURL) VALUES (1, 'Welcome to AutoCraft Central', 'Located in Tauranga, New Zealand, Autocraft-Central provides automotive repairs and servicing for all makes and models of motor vehicles.', '/public/images/car.jpg');