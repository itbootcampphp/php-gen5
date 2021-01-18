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
       <li>Naslov:'{$this->getNaslov()}'</li>
       <li>Autor:{$this->getAutor()}</li>
       <li>Izdata:{$this->getGodIzdanja()} godine</li>
       <li>Broj strana:{$this->getBrojStrana()}</li>
       <li>Cena:{$this->getCena()} RSD</li>
       </ul>";
    }
 
    function obimna(){
       $brStr = $this->getBrojStrana();
       if($brStr > 600){
          return true;
       }
       else {
          return false;
       }
    }
 
    function skupa(){
       $cena = $this->getCena();
       if($cena > 8000){
          return true;
       }
       else {
          return false;
       }
    }
 
    function dugackoIme(){
       $imeAutora = $this->getAutor();
       $duzinaImena = strlen($imeAutora);
       if($duzinaImena > 18){
          return true;
       }
       else {
          return false;
       }
    }
 }
?>