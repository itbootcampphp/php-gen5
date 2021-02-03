--Iz tabele customers, pročitati sve klijente koji dolaze iz Srbije
SELECT *
FROM `customers`
WHERE `state`='Srbija';

--Iz tabele customers, pročitati sve klijente kojima je ime Bojana
SELECT * 
FROM `customers` 
WHERE `name`="Bojana";

--Iz tabele customers, pročitati sve klijente kojima je plata manja od 500
SELECT `id`, `name`, `salary`
FROM `customers`
WHERE `salary`<500;

--Iz tabele customers, pročitati sve klijente: Čija je plata između 300 i 800
SELECT * FROM `customers` 
WHERE `salary` 
BETWEEN 430 AND 800

--Iz tabele customers, pročitati sve klijente: Čije je ime Ana, Bojana ili Vuk
SELECT `id`, `name`
FROM `customers`
WHERE `name` IN ("Ana", "Bojana", "Vuk");

--Iz tabele customers, pročitati sve klijente: Čija adresa počinje slovom B
SELECT `id`, `name`, `address` 
FROM `customers` 
WHERE `address` LIKE "B%";

--Iz tabele customers, pročitati sve klijente: Čija adresa sadrži slovo B
SELECT `id`, `name`, `address`
FROM `customers`
WHERE `address` LIKE "%B%";

--Iz tabele customers, pročitati sve klijente: Čija se adresa završava slovom B
SELECT `id`, `name`, `address`
FROM `customers` 
WHERE `address` LIKE "%B";

--Selektovati tri aktivna korisnika
SELECT * 
FROM `customers` 
WHERE `active`=1
LIMIT 3; --Limit služi da prikaže određeni broj redova

--Selektovati sve kupce koji se zovu Bojana, imaju preko 25 godina i platu preko 300
SELECT *
FROM `customers`
WHERE `name`="Bojana" AND `age`>25 AND salary>300;

--Selektovati sve kupce koji NISU aktivni
--1. način
SELECT *
FROM `customers`
WHERE `active`!=1;

--2. način
SELECT *
FROM `customers`
WHERE `active`<>1;

--3. način
SELECT *
FROM `customers`
WHERE NOT `active`=1;

--Selektovati sve kupce koji su iz Srbije i NISU aktivni
SELECT *
FROM `customers`
WHERE `state`="Srbija" AND NOT `active`=1;

--Selektovati id, ime i broj godina iz tabele customers, sortirati podatke prema broju godina rastuće
SELECT `id`, `name`, `age`
FROM `customers`
ORDER BY `age` ASC;

--Selektovati id, ime i broj godina iz tabele customers, sortirati podatke prema broju godina opadajuće
SELECT `id`, `name`, `age`
FROM `customers`
ORDER BY `age` DESC;

--Selektovati id, ime i broj godina iz tabele customers, sortirati podatke prema imenu rastuće
SELECT `id`, `name`, `age`
FROM `customers`
ORDER BY `name` ASC;

--Selektovati id, ime i broj godina iz tabele customers, sortirati podatke prema imenu opadajuće
SELECT `id`, `name`, `age`
FROM `customers`
ORDER BY `name` DESC;

--Selektovati id, ime i broj godina iz tabele customers, sortirati podatke prema imenu rastuće, ako je ime isto onda sortirati prema godinama takođe rastuće
SELECT `id`, `name`, `age`
FROM `customers`
ORDER BY `name` ASC, `age` ASC;

--Selektovati id, ime i broj godina iz tabele customers, sortirati podatke prema imenu rastuće, ako je ime isto onda sortirati prema godinama takođe OPADAJUĆE (prioritet prilikom prikazivanja onda imaju one osobe koje su starije)
SELECT `id`, `name`, `age`
FROM `customers`
ORDER BY `name` ASC, `age` DESC;

--Selektovati id, ime i broj kupovina onog kupca koji je imao najviše kupovina
SELECT `id`, `name`, `number_of_visits`
FROM `customers`
ORDER BY `number_of_visits` DESC
LIMIT 1;

--Selektovati id, ime i broj kupovina onog kupca koji je imao najviše kupovina i ima ispod 25 godina
SELECT `id`, `name`, `number_of_visits`
FROM `customers`
WHERE `age`<25
ORDER BY `number_of_visits` DESC
LIMIT 1;

--Selektovati najmanji broj iz kolone age tj. Selektovati najmanj broj godina iz tabele customers
SELECT MIN(age)
FROM customers

--Nazivamo kolonu MIN(age) nekim drugim imenom
SELECT MIN(age) AS "Najmanji broj godina"
FROM customers;

--Selektovati id, ime i broj godina najmlađe osobe iz tabele customers
SELECT `id`, `name`, `address`, MIN(`age`) AS "Najmanji broj godina"
FROM `customers`;

--Selektovati id, ime i broj godina najmlađe osobe iz tabele customers koja se zove Bojana
SELECT `id`, `name`, `address`, MIN(`age`) AS "Najmanji broj godina"
FROM `customers`
WHERE `name` LIKE "Bojana";

--Prebrojati kupce između 25 i 50 godina
SELECT COUNT(`age`) AS "Broj kupaca između 25 i 50 godina"
FROM `customers`
WHERE `age` BETWEEN 25 AND 50;

--Prosečna starost svih kupaca
SELECT AVG(`age`) AS "Prosečna starost svih kupaca"
FROM `customers`;

--Ukupan broj poseta
SELECT SUM(`number_of_visits`) AS "Ukupan broj poseta"
FROM `customers`;

--Broj različitih imena kupaca
SELECT COUNT(DISTINCT `name`) AS "Broj različitih imena"
FROM `customers`;

--Prosečna starost kupaca između 25 i 50 godina
SELECT AVG(`age`) AS "Prosečna starost kupaca između 25 i 50 godina"
FROM `customers`
WHERE `age`>=25 AND `age`<=50;

--Dodatak
SELECT name AS "Porodica", SUM(salary) AS "Suma plata po porodici"
FROM customers
GROUP BY name