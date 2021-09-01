<?php

class Movie {
    public $titolo;
    public $casaDiProduzione;
    public $regista;
    public $anno;
    public $valutazione = 'valutazione non disponibile';


    function __construct($_titolo,$_anno,$_regista){
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->regista = $_regista;
    }

    public function setValutazione($stelle){
        if($stelle == 1){
            $this->valutazione = 'scarso';
        }elseif($stelle <= 3){
            $this->valutazione = 'ni';
        }elseif($stelle <= 5){
            $this->valutazione = 'eccellente';
        }
    }

    public function getValutazione(){
        return $this->valutazione;
    }
}

$spiderman = new Movie('Spiderman','2019','Pluto');
$spiderman->setValutazione(1);
var_dump($spiderman);

$avatar = new Movie('Avatar','2010','Paperino');
$avatar->casaDiProduzione = '20th Century Fox';
$avatar->setValutazione(3);
var_dump($avatar);

$antman = new Movie('Antman','2020','Topolino');
$antman->setValutazione(5);
var_dump($antman);