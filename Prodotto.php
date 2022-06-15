<?php
class Prodotto {
    public $marca;
    public $tipologia;
    public $prezzo;
    public $disponibile = true;

    function __construct($_marca, $_tipologia, $_prezzo) {
        $this->marca = $_marca;
        $this->tipologia = $_tipologia;
        $this->prezzo = $_prezzo;
    }

    public function stampaInfo() {
        return "$this->marca $this->tipologia € $this->prezzo";
    }
}