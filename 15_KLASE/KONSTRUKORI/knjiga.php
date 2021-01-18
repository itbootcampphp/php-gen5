<?php

class Knjiga{
    private $naslov;
    private $autor;
    private $godIzdanja;
    private $brojStrana;
    private $cena;

    // Konstruktor
    public function __construct($n, $a, $g, $b, $c)
    {
       $this->setNaslov($n);
       $this->setAutor($a);
       $this->setGodIzdanja($g);
       $this->setBrojStrana($b);
       $this->setCena($c);
    }

    // Seteri
    public function setNaslov($n){
       $this->naslov = $n;
    }
    public function setAutor($a){
       $this->autor = $a;
    }
    public function setGodIzdanja($g){
       $this->godIzdanja = $g;
    }
    public function setBrojStrana($b){
       $this->brojStrana = $b;
    }
    public function setCena($c){
       $this->cena = $c;
    }

    // Geteri
    public function getNaslov(){
       return $this->naslov;
    }
    public function getAutor(){
       return $this->autor;
    }
    public function getGodIzdanja(){
       return $this->godIzdanja;
    }
    public function getBrojStrana(){
       return $this->brojStrana;
    }
    public function getCena(){
       return $this->cena;
    }

    // Metode
    function stampaj(){
       echo 
       "<ul>
       <li>Naslov: '{$this->getNaslov()}'</li>
       <li>Autor: {$this->getAutor()}</li>
       <li>Izdata: {$this->getGodIzdanja()} godine</li>
       <li>Broj strana: {$this->getBrojStrana()}</li>
       <li>Cena: {$this->getCena()} RSD</li>
       </ul>";
    }
 
    function obimna(){
       $brStr = $this->getBrojStrana();
       if($brStr > 600){
          return true;
       } else {
          return false;
       }
    }
 
    function skupa(){
       $cena = $this->getCena();
       if($cena > 8000){
          return true;
       } else {
          return false;
       }
    }
 
    function dugackoIme(){
       $imeAutora = $this->getAutor();
       $duzinaImena = strlen($imeAutora);
       if($duzinaImena > 18){
          return true;
       } else {
          return false;
       }
    }
 }

$k1 = new Knjiga("Naslov 1", "Autor 1", 1900, 100, 8500);
$k2 = new Knjiga("Naslov 2", "Autor 1", 1905, 650, 9500);
$k3 = new Knjiga("Naslov 3", "AutorAutorAutorAutor 2", 2009, 300, 800);
$k4 = new Knjiga("Naslov 4", "AutorAutorAutorAutor 2", 2015, 350, 1000);
$k5 = new Knjiga("Naslov 5", "Autor 3", 2020, 2700, 9500);

$knjige = array($k1, $k2, $k3, $k4, $k5);
// for($i=3; $i<count($knjige); $i++){
//     $k = $knjige[$i];
// }

//Ispisati sve autore kojima je ime dugačko
echo "<p>Ispisati sve autore kojima je ime dugačko</p>";
foreach($knjige as $k){
    if($k->dugackoIme()){
        echo "<p>{$k->getAutor()}</p>";
    }
}
echo "<hr>";

//Ispisati sve one knjige koje su istovremeno i skupe i obimne
echo "<p>Ispisati sve one knjige koje su istovremeno i skupe i obimne</p>";
foreach($knjige as $k){
    if($k->skupa() && $k->obimna()){
        $k->stampaj();
    }
}
echo "<hr>";

//ukupnaCena – Koliko ukupno koštaju sve knjige u nizu knjiga
echo "<p>Koliko ukupno koštaju sve knjige u nizu knjiga</p>";
function ukupnaCena($knjige){
    $ukupno = 0;
    // for($i=0; $i<count($knjige); $i++){
    //     $k = $knjige[$i];
    //     $ukupno += $k->getCena();
    // }
    foreach($knjige as $k){
        $ukupno += $k->getCena();
    }
    return $ukupno;
}
echo "Ukupna cena knjiga je " . ukupnaCena($knjige);
echo "<hr>";

//prosecnaCena – Kolika je prosečna cena jedne knjige
echo "<p>prosecnaCena – Kolika je prosečna cena jedne knjige
</p>";
function prosecnaCena($niz){
    $ukupna = ukupnaCena($niz);
    $br = count($niz);
    return $ukupna/$br;
}
//echo "Prosečna cena knjiga je " . prosecnaCena(array($k1, $k3, $k5)); //$niz = array(k1, k3, k5)
echo "Prosečna cena knjiga je " . prosecnaCena($knjige);
echo "<hr>";

//prosecnaStranica – Kolika je prosečna cena stranice knjige



?>