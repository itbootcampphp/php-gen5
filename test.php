INSERT INTO `periodi`(`id`, `naziv`, `od_god`, `do_god`) VALUES 
(1, "Srednjevekovna muzika", 800, 1400),
(2, "Renesansa", 1400, 1600),
(3, "Barok", 1600, 1750),
(4, "Klasicizam", 1750, 1820),
(5, "Romantizam", 1820, 1900),
(6, "Impresionizam", 1850, 1950),
(7, "Muzika 20. veka", 1920, 2000);

INSERT INTO `kompozitori`(`id`, `ime`, `prezime`, `bio`) 
VALUES 
(1, "Johan", "Sebastijan Bah", " Čuveni nemački kompozitor iz razdoblja baroka, kantor i virtuoz na čembalu i orguljama"),
(2, "Bela", "Bartok", "Mađarski kompozitor, pijanist i etnomuzikolog. Smatra se jednimod najznačajnijih predstavnika moderne."),
(3, "Ludvig", "van Bethoven", "Nemački kompozitor i pijanist iz perioda prelaza klasicizma u romantizam. Smatra se jednim od najvećih kompozitora svih vremena."),
(4, "Žorž", "Bize", "Francuski kompozitor iz perioda romantizma."),
(5, "Johanes", "Brams", "Nemački kompozitor, pijanist i dirigent iz perioda romantizma. Veći deo profesionalnog života proveo je u Beču, gde je bio lider muzičke scene, a slovi za jednog od značajnijih kompozitora druge polovine 19. veka"),
(6, "Leo", "Delib", "Bio je francuski kompozitor iz perioda romantizma. Pisao je muziku za balet, opere i operete."),
(7, "Volfgang", "Amadeus Mocart", "Austrijski kompozitor i pijanista, jedan od najznačajnijih i najuticajnijih svetskih kompozitora klasične muzike."),
(8, "Antonio", "Vivaldi", "Venecijanski sveštenik i kompozitor iz perioda baroka, kao i poznati violinista");

INSERT INTO `instrumenti`(`id`, `naziv`, `opis`) 
VALUES 
(1, "violina", "gudački"),
(2, "viola", "gudački"),
(3, "violončelo", "gudački"),
(4, "klavir", "žičani"),
(5, "gitara", "žičani"),
(6, "harfa", "žičani"),
(7, "lira", "žičani"),
(8, "oboa", "duvački"),
(9, "horna", "duvački"),
(10, "saksofon", "duvački"),
(11, "trombon", "duvački"),
(12, "truba", "duvački"),
(13, "frula", "duvački"),
(14, "orgulje", "aerofoni"),
(15, "harmonika", "aerofoni"),
(16, "flauta", "duvački"),
(17, "ksilofon", "udaraljke");

INSERT INTO `kompozicije`(`id`, `naziv`, `god`, `trajanje`, `periodi_id`) 
VALUES 
(1, "Za Elizu", 1810, 134, 4),
(2, "Tokata i fuga u d-molu", 1704, 517, 4),
(3, "Mađarske igre", null , 450, 5),
(4, "Ninja sili nebesnije", null , 340, 2),
(5, "Čarobna frula", 1791 , 280, 4),
(5, "Četiti godišnja doba - leto", null , 780, 3);

