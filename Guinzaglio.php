<?php
require_once __DIR__ . "/Prodotto.php";

class Guinzaglio extends Prodotto
{
    public $lungheza;
    public $materiale;

    function __construct($_marca, $_tipologia, $_prezzo, $lunghezza, $materiale)
    {
        parent::__construct($_marca, $_tipologia, $_prezzo);
        $this->dimensioni = $lunghezza;
        $this->materiale = $materiale;
    }


    public function stampaInfo () {
        return "<h4>$this->marca</h4>$this->tipologia<br>  € $this->prezzo<br>  Lunghezza : $this->lunghezza <br> Materiale : $this->materiale";
    }
}