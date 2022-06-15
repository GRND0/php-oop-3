<?php
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/Medicato.php";

class Cibo extends Prodotto {
    use Medicato;
    public $scadenza = "12/12/22";
    public $proteina;
    public $grammatura;


    function __construct($_marca, $_tipologia, $_prezzo, $_proteina, $_grammatura, $_specie){
        parent::__construct($_marca, $_tipologia, $_prezzo);
        $this->proteina = $_proteina;
        $this->grammatura = $_grammatura;
        $this->principio_attivo = "Xamamina";
        $this->specie = $_specie;
    }

    public function stampaInfo () {
        return "<h4>$this->marca</h4>$this->tipologia<br>€ $this->prezzo<br>Scadenza : $this->scadenza<br>Tipo di carne : $this->proteina<br>Grammi : $this->grammatura <br> Principio attivo : $this->principio_attivo <br> Adatto a : $this->specie";
    }

} 