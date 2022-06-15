<?php
class Utente
{
    public $name;
    public $register;
    public $anno;
    public $carrello = [];


    function __construct($_name, $_register, $_anno)
    {
        $this->name = $_name;
        $this->register = $_register;
        $this->anno = $_anno;

    }

    function aggiuntaCarrello($_prodotto)
    {
        $this->carrello[] = $_prodotto;
    }

    function prezzo() {
        $sconto = 20;
        $prezzo_totale = 0;
      
        foreach ($this->carrello as $articolo) {
            $prezzo_totale += $articolo->prezzo;
        }

        if ($this->register) {
            $prezzo_totale = $prezzo_totale - ($sconto / 100 * $prezzo_totale);
        }
           
        return $prezzo_totale;
    }

    function controlloCarta() {
        $anno_scadenza = 2025;
        if ($this->anno < $anno_scadenza) {
            return "Carta Valida!";
        } else {
            // return "Carta Scaduta!";
            throw new Exception("Carta non valida!");
        }
    }
}
