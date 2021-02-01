-- Dodavanje redova u tabelu tasks
INSERT INTO `tasks`(`task_id`, `title`, `start_date`, `due_date`, `status`, `description`, `priority`) VALUES
(1, 'Čas iz ITBootcamp-a', '2021-02-01', '2021-02-01', 1, 'Čas iz baza podataka', 1),
(2, 'Čišćenje', '2021-01-20', NULL, 0, 'Usisivač u ruke', 0),
(3, 'Kupi hleb', '2021-02-02', '2021-02-02', 2, 'Inače češ ostati gladan', 1);

-- Iz tabele customers procitati sve KOLONE
SELECT * FROM `customers`;

-- Iz tabele customers procitati samo imena i godine
-- SELECT 'name', `name`, `age` FROM customers; -- Ovo dohvata string 'name', i kolone name i age iz tabele customers.
SELECT `name`, `age` FROM `customers`;

-- Iz tabele tasks procitati sve kolone
SELECT * FROM `tasks`;

-- Iz tabele tasks procitati samo naziv, status i prioritet
SELECT `title`, `status`, `priority` FROM `tasks`;

-- Dohvatiti sve razlicite godine korisnika
SELECT DISTINCT `age` FROM `customers`;

-- Dodavanje novih korisnika tako da se ponavljaju vrednosti nekih kolona
INSERT INTO `customers`(`id`, `name`, `age`, `address`, `salary`, `active`, `state`, `number_of_visits`) VALUES
(6, 'Bojana', 23, 'Narodnih heroja 25a', 500.50, 1, 'Serbia', 3),
(7, 'Vuk', 36, 'Bubanjskih heroja 34', 600, 0, 'Serbia', 15);

-- Dohvatiti sva razlicita imena korisnika
SELECT DISTINCT `name` FROM `customers`;

-- Dohvatiti sva razlicita imena i adrese korisnika
SELECT DISTINCT `name`, `address` FROM `customers`;
-- Cela kombinacija kolona mora da buda razlicita, a ne pojedinacne kolone

-- Dohvatiti sve razlicite drzave
SELECT DISTINCT `state` FROM `customers`;