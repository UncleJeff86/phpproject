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

USE localdb;
	/* Inserting Dummy Data*/
	INSERT INTO bigmachines (make, model, serialnum, shortref)
	VALUES
	("Liebherr", 946, "758-550-001", 01),
	("Liebherr", 946, "800-635-402", 02),
	("Liebherr", 936, "456-763-603", 03),
	("Liebherr", 946, "443-311-834", 04),
	("Liebherr", 956, "665-878-044", 05),
	("Liebherr", 946, "987-044-884", 06),
	("Liebherr", 946, "505-135-067", 07),

	("Volvo", 240, "300-530-100", 08),
	("Volvo", 240, "330-430-200", 09),
	("Volvo", 140, "405-500-350", 10),
	("Volvo", 360, "420-696-404", 11);

	INSERT INTO bigmachinetools (tooltype, machinefit, shortref)
	VALUES
	("Koura", "Liebherr", 31),
	("Koura", "Liebherr 956", 32),
	("Koura", "Volvo", 42),
	("Kauha", "Volvo 360", 63),
	("Kauha", "Liebherr", 50),
	("Kauha", "Liebherr", 51),
	("Vasara", "Liebherr", 73),
	("Vasara", "Liebherr", 74),
	("Pulveri", "Liebherr", 81),
	("Pulveri", "Volvo", 83),
	("Pulveri", "Volvo 240", 84);

	INSERT INTO employees (empname,position)
	VALUES
	("Jeffrey Eboreime","Machine Op."),
	("Mata La Paine","Hands"),
	("Kolina Meteli","Truck Driver"),
	("Eilin Jalla","Hands"),
	("Perun Apakaste","Machine Op."),
	("Mik Roaalto","Hands"),
	("Vira L. Linen","Machine Op."),
	("Kat Totuuletin","Machine Op."),
	("Ova Toikein","Manager");
/*END Dummy Data*/
