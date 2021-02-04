-- Kreiranje baze društvena mreža
CREATE DATABASE drustvena_mreza;

-- Kreiranje tabele KORISNICI
CREATE TABLE korisnici(
	id INT PRIMARY KEY,
	korisnicko_ime VARCHAR(45),
    lozinka VARCHAR(45)
);

-- Kreiranje tabele PROFILI
CREATE TABLE profili(
    id INT PRIMARY KEY,
    adresa VARCHAR(255),
    telefon VARCHAR(40),
    korisnik_id INT UNIQUE
);

-- Povezivanje tabela KORISNICI i PROFILI, 1:1 vezom
ALTER TABLE profili -- Koju tabelu dopunjujemo
ADD FOREIGN KEY(korisnik_id) -- Koje polje u toj tabeli postavljamo da bude strani ključ
REFERENCES korisnici(id); -- Povezujemo to polje sa kojom tabelom i kojim njenim poljem tj. tabela1(polje u tabeli 1)

-- Unos podatka u tabelu KORISNICI
INSERT INTO korisnici(id, korisnicko_ime, lozinka)
VALUES 
(1, 'ana_antic', '123456'),
(2, 'bojan_bojovic', '123456'),
(3, 'vuk_vulic', '123456');

-- Unos podatka u tabelu PROFILI
INSERT INTO profili(id, adresa, telefon, korisnik_id)
VALUES
(101, 'Strahinjića Bana 45b', '123456', 2);

INSERT INTO profili(id, adresa, telefon, korisnik_id)
VALUES
(102, 'Romanijska 45a', '123456', 1);

-- Ovo ne radi jer smo već imali strani ključ 1, a strani  ključ u vezi 1-1 mora biti UNIQUE
INSERT INTO profili(id, adresa, telefon, korisnik_id)
VALUES
(103, 'Zetska 1', '123456', 1);

-- Kreiranje tabele OBJAVE
CREATE TABLE objave(
    id INT PRIMARY KEY,
    naslov_objave VARCHAR(255)
);

-- Kreiranje tabele KOMENTARI
CREATE TABLE komentari(
    id INT PRIMARY KEY,
    tekst_komentara VARCHAR(255),
    objave_id INT,
    FOREIGN KEY(objave_id) REFERENCES objave(id) -- Strani ključ objave_id povezujemo sa primarnim ključem iz tabele objave
)ENGINE=InoDB;

-- Unos podataka u tabelu OBJAVE
INSERT INTO objave(id, naslov_objave)
VALUES 
(1, 'Nole nasmejao publiku'),
(2, 'Jokić tripl dabl'),
(3, 'Bogdanović solidan');

-- Unos podataka u tabelu KOMENTARI
INSERT INTO komentari(id, tekst_komentara, objave_id)
VALUES
(1, "Svaka čast majstore!", 2),
(2, "Nedovoljno za pobedu...", 2),
(3, "Trojka sa druge planete!", 3),
(4, "Ne mogu da prestanem da se smejem!", 1),
(5, "Jokić smršao", 2);

-- Kreiranje tabele KATEGORIJE
CREATE TABLE kategorije(
    id INT PRIMARY KEY, 
    naziv VARCHAR(255) NOT NULL
);

-- Unos podataka u tabelu KATEGORIJE
INSERT INTO kategorije(id, naziv)
VALUES
(1, "Politika"),
(2, "Kultura"),
(3, "Hronika"),
(4, "Zabava"),
(5, "Sport"),
(6, "Vreme"),
(7, "Zdravlje");

-- Povezivanje tabela KATEGORIJE i OBJAVE vezom N:M
-- Kreiranje medjutabele
CREATE TABLE kategorije_has_objave(
    kategorije_id INT,
    objave_id INT,
    FOREIGN KEY(kategorije_id) REFERENCES kategorije(id),
    FOREIGN KEY(objave_id) REFERENCES objave(id)
);

-- Unos podataka u medjutabelu
INSERT INTO kategorije_has_objave(kategorije_id, objave_id)
VALUES
(4, 1),
(5, 1),
(5, 2),
(5, 3);