#assume database has been created

CREATE TABLE bigmachines (
	id int AUTO_INCREMENT PRIMARY KEY,
	make varchar(120) NOT NULL,
	model varchar(120) NOT NULL,
	serialnum varchar(20),
	shortref int
);


CREATE TABLE bigmachinetools (
	id int AUTO_INCREMENT PRIMARY KEY,
	tooltype varchar(120) NOT NULL,
	machinefit varchar(60),
	shortref int
);

CREATE TABLE employees (
	id int AUTO_INCREMENT PRIMARY KEY,
	empname varchar(40) NOT NULL,
	position varchar(35),
	message varchar(35)
);

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
