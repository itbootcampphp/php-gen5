-- 1. Izlistati sve nazive kompozicija i imena kompozitora koji su ih komponovali.
SELECT kompozicije.naziv, kompozitori.ime, kompozitori.prezime
FROM kompozicije
INNER JOIN kompozicije_has_kompozitori
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
INNER JOIN kompozitori
ON kompozicije_has_kompozitori.kompozitori_id = kompozitori.id;

-- 2. Izlistati sve nazive kompozicija, nazive perioda, kao i trajanje kompozicija.
SELECT kompozicije.naziv, periodi.naziv, kompozicije.trajanje
FROM kompozicije
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id;

-- 2.a. Izlistati sve nazive kompozicija, nazive perioda, kao i trajanje kompozicija i poređati ih od najduže ka najkraćoj kompoziciji.
SELECT kompozicije.naziv, periodi.naziv, kompozicije.trajanje
FROM kompozicije
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id
ORDER BY kompozicije.trajanje DESC;

-- 3. Izlistati sve kompozicije i njihove kompozitore, tako da su kompozicije nastale između 1700. i 1800. godine
SELECT kompozicije.naziv, kompozitori.ime, kompozitori.prezime
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
INNER JOIN kompozicije
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
WHERE kompozicije.god BETWEEN 1700 AND 1800;

-- Alias za kolone
SELECT k.naziv AS "Naziv kompozicije", i.naziv AS "Instrument"
FROM kompozicije AS k
INNER JOIN kompozicije_has_instrumenti AS ki
ON k.id = ki.kompozicije_id
INNER JOIN instrumenti AS i
ON ki.instrumenti_id = i.id;

-- 10. Prikazati najdužu kompoziciju, dužinu njenog trajanja, kompozitora koji ju je komponovao i period kome pripada. 
SELECT kompozicije.naziv, kompozicije.trajanje, kompozitori.ime, kompozitori.prezime, periodi.naziv
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
INNER JOIN kompozicije
ON kompozicije_has_kompozitori.kompozicije_id = kompozicije.id
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id
ORDER BY kompozicije.trajanje DESC
LIMIT 1;


-- 10. drugi način da prikažemo sve kompozicije sa najdužim trajanjem (ukoliko ih ima više sa istim najdužim trajanjem)
SELECT kompozicije.naziv, kompozicije.trajanje, kompozitori.ime, kompozitori.prezime, periodi.naziv
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
INNER JOIN kompozicije
ON kompozicije_has_kompozitori.kompozicije_id = kompozicije.id
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id
WHERE kompozicije.trajanje = (SELECT MAX(kompozicije.trajanje) FROM kompozicije);

-- 11. Selektovati sve kompozitore čija su dela duža od 5 minuta i kraća od 25 minuta

