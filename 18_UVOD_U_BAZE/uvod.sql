--Kreiranje baze
CREATE DATABASE moja_druga_baza;

-- Brisanje baze
DROP DATABASE moja_druga_baza;

--BAZA SKOLA
CREATE DATABASE moja_skola
CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

--CREIRANJE TABELE studenti
CREATE TABLE studenti(
	ime VARCHAR(30),
	prezime VARCHAR(50)
);

--BAZA SHOP
CREATE DATABASE shop;

--KREIRANJE TABELE customers
CREATE TABLE customers(
	id INT PRIMARY KEY,
	name VARCHAR(25) NOT NULL,
	address VARCHAR(255),
	age INT,
	salary DECIMAL(18,2) DEFAULT 500
);

--KREIRANJE TABELE tasks
CREATE TABLE IF NOT EXISTS tasks(
	task_id INT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
	start_date DATE,
    due_date DATE,
	status TINYINT DEFAULT 0,
	description TEXT
);

--DODAVANJE KOLONE U TABELU
ALTER TABLE customers 
ADD active BOOLEAN;

ALTER TABLE customers
ADD state VARCHAR(90);

ALTER TABLE customers
ADD number_of_visits TINYINT; 

ALTER TABLE tasks
ADD priority TINYINT DEFAULT 0;

ALTER TABLE tasks
MODIFY COLUMN description VARCHAR(255);

--UNOS NOVOG KORISNIKA
INSERT INTO customers(id, name, age, address, state, salary, number_of_visits, active)
VALUES(1, "Ana", 23, "Narodnih heroja 25a", "Srbija", 430, 3, 1);

INSERT INTO customers
VALUES(2, "Bojana", "Bulevar Nemanjića", 54, 720, 1, "Srbija", 5);

INSERT INTO `customers`(`id`, `name`, `address`, `age`, `salary`, `active`, `state`, `number_of_visits`) 
VALUES (3,"Vuk","Vizantijski bulevar 32/15",27,382,0,"Srbija",1);

INSERT INTO customers
VALUES 
(4, "Goran", "Višegradska 45", 40, 780, 1, "Srbija", 6),
(5, "Dejan", "Studenična bb", 52, 1050 , 1, "Srbija", 12);

