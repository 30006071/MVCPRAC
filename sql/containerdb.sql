use containerdb;

DROP TABLE IF EXISTS Contact;
DROP TABLE IF EXISTS Booking;
DROP TABLE IF EXISTS Feedback;
DROP TABLE IF EXISTS Info;
DROP TABLE IF EXISTS Services;
DROP TABLE IF EXISTS Forms;

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
    Title varchar(100) NULL,
    Inform TEXT NULL,
    ImageURL varchar(255),
    InfoTypeID int,
    PRIMARY KEY (InfoID)
);

CREATE TABLE IF NOT EXISTS Forms
(
    FormID int(10),
    Title varchar(100) NULL,
    Heading varchar(100) NULL,
    FormAction varchar(40),
    FormsTypeID int,
    PRIMARY KEY (FormID)
);

CREATE TABLE IF NOT EXISTS Services
(
    SID int(10),
    Title varchar(100) NULL,
    Heading TEXT NULL,
    Text TEXT NULL,
    ImageURL varchar(255),
    ServiceTypeID int,
    PRIMARY KEY (SID)
);

INSERT INTO Forms (FormID, Title, Heading, FormAction, FormsTypeID) VALUES (1, "Place FeedBack", "Feedback Form", '/Pages/addTheFeedback', 1);
INSERT INTO Forms (FormID, Title, Heading, FormAction, FormsTypeID) VALUES (2, "What would you like to Book-In", "Booking Form", '/Pages/BookIn', 2);
INSERT INTO Forms (FormID, Title, Heading, FormAction, FormsTypeID) VALUES (3, "Write your query", "Contact Form", '/Pages/addTheContact', 3);
 
INSERT INTO Info (InfoID, Title, Inform, ImageURL, InfoTypeID) VALUES (1, 'Welcome to AutoCraft Central', "Located in Tauranga, New Zealand, Autocraft-Central provides automotive repairs and servicing for all makes and models of motor vehicles. Autocraft-Central has been in operation since November 2011, and by means of earned reputation and client recommendations continually builds an ever increasing loyal customer base. Autocraft-Central is jointly owned by Stephen O'Donoghue and Andrew Erith, both certified technicians bringing between them 48 years experience within the motor industry. Operating from a fully equipped, modern workshop, Autocraft-Central is certified by the New Zealand Transport Agency.", '/public/images/shop.jpg', 1);
INSERT INTO Info (InfoID, Title, Inform, ImageURL, InfoTypeID) VALUES (2, 'AutoCraft Central', "Here at Autocraft we aim too provide outstanding customer service. Every client is treated as an individual, not just a number, and long-term relationships are formed by treating each person with the utmost respect, fairness, honesty and integrity. Our Workshops current project, Andys (Andrew Erith the Founder of autocraft Central) replica of a 1983 Bathurst Group C Mazda RX7 is pictured", '/public/images/about.jpg', 2);
INSERT INTO Info (InfoID, ImageURL, InfoTypeID) VALUES (4, '/public/images/car.jpg', 1);
INSERT INTO Info (InfoID, ImageURL, InfoTypeID) VALUES (3, '/public/images/car.jpg', 2);

INSERT INTO Services (SID, Title, Heading, Text, ImageURL, ServiceTypeID) VALUES (1, 'Modifications', 'Fabrication', "All of our work is hand made. Turbo manifolds, turbo fitment & setups, alloy pipe work, and mandrel exhaust systems are only a few of the many products we have to offer, so if you're needing turbo upgrades, custom fabrication, or just some helpful advice, give us a call today.", '/public/images/fab.jpg', 1);
INSERT INTO Services (SID, Heading, Text, ImageURL, ServiceTypeID) VALUES (2, 'Performance Builds', "Our large engine workshop and experienced team give you total peace of mind for your custom built high performance race engine. We have a huge range of machinery we offer a total engine service, eliminating the need for outwork, ensuring quality and precision in our work through every step in the process.", '/public/images/perform.jpg', 1);
INSERT INTO Services (SID, Title, Heading, Text, ImageURL, ServiceTypeID) VALUES (3, 'Servicing', 'General Servicing', "Avoiding regular servicing might seem like an easy way to save money, but could cause far greater woes in the future. Regular car services are carried out to ensure that a vehicle operates efficiently, safely and reliably. Skipping car services places excessive stress on vehicle components, and these can be quite pricey to fix later on. What's worse is an unserviced car has a greater chance of experiencing inconvenient and expensive breakdowns when driven.", '/public/images/servicing.jpg', 2);
INSERT INTO Services (SID, Heading, Text, ImageURL, ServiceTypeID) VALUES (4, 'Motul Oil', "Motul created a stir in 1971 by developing a 100 percent synthetic oil made from esters of vegetal origin, drawing on aeronautical technology. As a tribute to the 300 victories obtained by the brand at that date, this revolutionary lubricant was called '300V'. To demonstrate the validity of this innovation, Motul participated at the highest competition level in Formula One with the team Frank Williams-Motul in 1971.", '/public/images/motul.jpg', 2);
INSERT INTO Services (SID, Title, Heading, Text, ImageURL, ServiceTypeID) VALUES (5, 'Repairs', 'General Repairs', "Should you keep your vehicle regularly serviced (usually every 10,000km's or each 12 months, whichever comes first) will drastically limit the inconvenience of vehicle breakdown, but should the unforeseen happen, we are here to help.", '/public/images/repair.jpg', 3);
INSERT INTO Services (SID, Heading, Text, ImageURL, ServiceTypeID) VALUES (6, 'Panel-Beater referals', "We are very proud of our expertise, premises and staff, we therefore ask if there is anything you think we might do better in our quest to supply you with the utmost quality and service please feel free to contact: Tyler Schwalger - tyler@turnerspanelbeating.co.nz or on 027 226 3031.", '/public/images/panelb.jpg', 3);
INSERT INTO Services (SID, Title, Heading, Text, ImageURL, ServiceTypeID) VALUES (7, 'Warrant of fitness', 'Warrants at Auto-Craft', "A warrant of fitness (WoF) is a regular check to ensure that your vehicle meets required safety standards. It’s your job to keep your vehicle up to WoF condition at all times. For example, while tyres on your vehicle may pass on the day of your warrant inspection, you’ll need to replace them as soon as the tread gets to the minimum depth. If you wait until the next inspection before replacing them, you increase your risk of having a crash or receiving a fine.", '/public/images/warrant.jpg', 4);
INSERT INTO Services (SID, Heading, Text, ImageURL, ServiceTypeID) VALUES (8, 'Warrant repairs', "Our team of highly trained mechanics have been in business for over 25 years providing great service to Kiwi motorists. We carry out repairs on any make or model. Some common repairs we provide are: Brakes, Electrical, Cambelt replacements, Clutch replacements, Diagnostic check and Steering and suspension", '/public/images/wrepair.jpg', 4);