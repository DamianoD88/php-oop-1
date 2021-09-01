<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’ => all'interno della classe sono dichiarate delle variabili d'istanza => all'interno della classe è definito un costruttore => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php

class Movie {
    public $nome;
    public $anno;
    public $sconto = 0;
    

    public function setSconto($eta) {
       if($eta > 10) {
            $this->sconto = 20;
       } 
    }

    public function getSconto() {
        return $this-> sconto;
    }

}

$dogma = new Movie();
$dogma->setSconto(22);


$costantine = new Movie();
$costantine->setSconto(16);


$dogma = new Movie();
$dogma->nome = "Dogma";
$dogma->anno = "1999";
var_dump($dogma);



$costantine = new Movie();
$costantine->nome = "Costantine";
$costantine->anno = "2005";
var_dump($costantine);