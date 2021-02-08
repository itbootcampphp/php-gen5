-- INNER JOIN

-- Selektovati nalsove objava i komentare zate naslove objava
SELECT objave.naslov_objave, komentari.tekst_komentara
FROM objave
INNER JOIN komentari
ON objave.id = komentari.objave_id;

-- Selektovati korisnička imena i njihove adrese
SELECT korisnici.korisnicko_ime, profili.adresa
FROM korisnici
INNER JOIN profili
ON korisnici.id = profili.korisnik_id;

-- Selektovati sve naslove objava, kategorije kojima pripadaju i komentare
SELECT objave.naslov_objave, kategorije.naziv, komentari.tekst_komentara
FROM kategorije
INNER JOIN kategorije_has_objave
ON kategorije.id = kategorije_has_objave.kategorije_id
INNER JOIN objave
ON kategorije_has_objave.objave_id = objave.id
INNER JOIN komentari
ON objave.id = komentari.objave_id;

-- Ili ukoliko želimo da preimenujemo nazive kolona u prikazu
SELECT objave.naslov_objave AS 'objava', kategorije.naziv AS 'kategorija', komentari.tekst_komentara AS 'komentar'
FROM kategorije
INNER JOIN kategorije_has_objave
ON kategorije.id = kategorije_has_objave.kategorije_id
INNER JOIN objave
ON kategorije_has_objave.objave_id = objave.id
INNER JOIN komentari
ON objave.id = komentari.objave_id
WHERE kategorije.naziv LIKE "zabava";

-- Selektovati sve naslove objava, kategorije kojima pripadaju i komentare, tako da kategorija bude "zabava"
SELECT objave.naslov_objave, kategorije.naziv, komentari.tekst_komentara
FROM kategorije
INNER JOIN kategorije_has_objave
ON kategorije.id = kategorije_has_objave.kategorije_id
INNER JOIN objave
ON kategorije_has_objave.objave_id = objave.id
INNER JOIN komentari
ON objave.id = komentari.objave_id
WHERE kategorije.naziv LIKE "zabava";



