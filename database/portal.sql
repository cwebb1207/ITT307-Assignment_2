CREATE DATABASE  IF NOT EXISTS `itportal`;
USE `itportal`;

DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(6) NOT NULL,
  `name` varchar(150) NOT NULL,
  `credits` int NOT NULL,
  `prerequisites` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
);

LOCK TABLES `courses` WRITE;
INSERT INTO `courses` VALUES (1,'ITT101','Introduction to Information Technology',3,NULL,'An introduction to information technology, computer systems, software and the role of IT in modern organisations.'),(2,'ITT102','Computer Programming I',3,NULL,'Introduces programming fundamentals, algorithms, variables, control structures and problem solving.'),(3,'ITT201','Database Management Systems',3,'ITT102','Introduces relational database concepts, SQL, database design and database management.'),(4,'ITT202','Computer Programming II',3,'ITT102','Builds on programming fundamentals and explores object-oriented programming and advanced programming techniques.'),(5,'ITT203','Computer Networks',3,'ITT101','Explores computer networking concepts, network devices, protocols, addressing and network communication.'),(6,'ITT301','Web Application Development',3,'ITT102','Covers HTML, CSS, JavaScript, PHP and the development of dynamic database-driven websites.'),(7,'ITT302','Cybersecurity Fundamentals',3,'ITT203','Introduces cybersecurity principles, common threats, vulnerabilities, security controls and risk management.'),(8,'ITT303','Systems Analysis and Design',3,'ITT101','Examines systems development methodologies, requirements gathering, modelling and system design.'),(9,'ITT307','Cloud Computing',3,'ITT203','Introduces cloud computing concepts, service models, deployment models and cloud infrastructure.'),(10,'ITT401','IT Project Management',3,'ITT303','Explores project planning, scheduling, budgeting, risk management and the delivery of IT projects.');
UNLOCK TABLES;

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ;

DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `position` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
);

LOCK TABLES `staff` WRITE;
INSERT INTO `staff` VALUES (1,'Dr. Michael Brown','Head of Department','+1 876 555 0101','michael.brown@example.com','michael_brown.jpg'),(2,'Mrs. Karen Williams','Senior Lecturer','+1 876 555 0102','karen.williams@example.com','karen_williams.jpg'),(3,'Mr. David Thompson','Lecturer','+1 876 555 0103','david.thompson@example.com','david_thompson.jpg'),(4,'Ms. Alicia Campbell','Network Administrator','+1 876 555 0104','alicia.campbell@example.com','alicia_campbell.jpg'),(5,'Mr. Christopher James','IT Technician','+1 876 555 0105','christopher.james@example.com','christopher_james.jpg');
UNLOCK TABLES;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
);

LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES (1,'Portal Administrator','admin@itportal.com','$2y$10$.QE6xt4IGILfCQZpv/dQK.2HDHLzWxBmXFhlM4JP8dG8NkHqwzRKG');
UNLOCK TABLES;