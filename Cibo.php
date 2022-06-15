<?php
require_once __DIR__ . "/Prodotto.php";

class Cibo extends Prodotto {
    public $scadenza = "12/12/22";
    public $proteina;
    public $grammatura;


    function __construct($_marca, $_tipologia, $_prezzo, $proteina, $grammatura){
        parent::__construct($_marca, $_tipologia, $_prezzo);
        $this->proteina = $proteina;
        $this->grammatura = $grammatura;
    }

    public function stampaInfo () {
        return "<h4>$this->marca</h4>$this->tipologia<br>€ $this->prezzo<br>Scadenza : $this->scadenza<br>Tipo di carne : $this->proteina<br>Grammi : $this->grammatura";
    }

} 