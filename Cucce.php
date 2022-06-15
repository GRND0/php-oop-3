<?php
require_once __DIR__ . "/Prodotto.php";

class Cucce extends Prodotto
{
    public $dimensioni;
    public $materiale;

    function __construct($_marca, $_tipologia, $_prezzo, $dimensioni, $materiale)
    {
        parent::__construct($_marca, $_tipologia, $_prezzo);
        $this->dimensioni = $dimensioni;
        $this->materiale = $materiale;
    }


    public function stampaInfo () {
        return "<h4>$this->marca</h4>$this->tipologia <br> € $this->prezzo<br>  Dimensioni : $this->dimensioni <br> Materiale : $this->materiale";
    }
}
