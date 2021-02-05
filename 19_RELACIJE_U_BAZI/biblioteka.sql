-- Kreiranje baze podataka BIBLIOTEKA
CREATE DATABASE biblioteka;

-- Kreirati tabelu KNJIGE
CREATE TABLE knjige(
    id INT PRIMARY KEY,
    naslov VARCHAR(255) NOT NULL
);

-- Kreirati tabelu PISAC
CREATE TABLE pisac(
    id INT PRIMARY KEY,
    ime_prezime VARCHAR(255) NOT NULL,
    god_rodj YEAR,
    bio TEXT
);

-- Kreirati tabelu ZANR
CREATE TABLE zanr(
    id INT PRIMARY KEY,
    naziv VARCHAR(50)
);

-- Kreirati tabelu CLANOVI
CREATE TABLE clanovi(
    id INT PRIMARY KEY,
    ime VARCHAR(50),
    prezime VARCHAR(50)
);

-- Kreirati tabelu KNJIGE_HAS_ZANR
CREATE TABLE knjige_has_zanr(
    knjige_id INT,
    zanr_id INT,
    FOREIGN KEY (knjige_id) REFERENCES knjige(id), 
    FOREIGN KEY (zanr_id) REFERENCES zanr(id)
);

-- Kreirati tabelu ZADUZENJE
CREATE TABLE zaduzenje(
    id INT PRIMARY KEY,
    datum DATE,
    vratio TINYINT(1) DEFAULT 0,
    clanovi_id INT,
    knjige_id INT,
    FOREIGN KEY (clanovi_id) REFERENCES clanovi(id), 
    FOREIGN KEY (knjige_id) REFERENCES knjige(id)
);

-- Kreirati tabelu KNJIGE_HAS_PISAC
CREATE TABLE knjige_has_pisac(
    knjige_id INT,
    pisac_id INT,
    FOREIGN KEY (knjige_id) REFERENCES knjige(id), 
    FOREIGN KEY (pisac_id) REFERENCES pisac(id)
);