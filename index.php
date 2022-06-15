<?php
require_once __DIR__ . "/Cucce.php";
require_once __DIR__ . "/Guinzaglio.php";
require_once __DIR__ . "/Cibo.php";
require_once __DIR__ . "/Utente.php";

$catalogo = [];

$cibo_salmone = new Cibo("Almanatura", "Cibo per gatti", 2.50, "Salmone", "150 Gr", "Felini");
$catalogo[] = $cibo_salmone;
$cibo_salmone_l = new Cibo("Almanatura", "Cibo per gatti", 4.50, "Salmone", "300 Gr", "Felini");
$catalogo[] = $cibo_salmone_l;
$cibo_pollo = new Cibo("Almanatura", "Cibo per gatti", 2.50, "Pollo", "150 Gr","Felini");
$catalogo[] = $cibo_pollo;
$cibo_pollo_l = new Cibo("Almanatura", "Cibo per gatti", 4.50, "Pollo", "300 Gr","Felini");
$catalogo[] = $cibo_pollo_l;
$cibo_coniglio = new Cibo("Almanatura", "Cibo per gatti", 2.50, "Coniglio", "150 Gr","Cani");
$catalogo[] = $cibo_coniglio;
$cibo_coniglio_l = new Cibo("Almanatura", "Cibo per gatti", 4.50, "Coniglio", "300 Gr","Cani");
$catalogo[] = $cibo_coniglio_l;

$cuccia_plastica = new Cucce("AnimalHouse", "Cuccia per Cani", 50, "100 x 50 cm", "Plastica");
$catalogo[] = $cuccia_plastica;
$cuccia_plastica_l = new Cucce("AnimalHouse", "Cuccia per Cani", 70, "150 x 100 cm", "Plastica");
$catalogo[] = $cuccia_plastica_l;
$cuccia_legno = new Cucce("AnimalHouse", "Cuccia per Cani", 60, "100 x 50 cm", "Legno");
$catalogo[] = $cuccia_legno;
$cuccia_legno_l = new Cucce("AnimalHouse", "Cuccia per Cani", 80, "150 x 100 cm", "Legno");
$catalogo[] = $cuccia_legno_l;

$guinzaglio_nylon = new Guinzaglio("AnimalFriend", "Guinzaglio per Cani", 15, "1,5 m", "Nylon");
$catalogo[] = $guinzaglio_nylon;
$guinzaglio_nylon_l = new Guinzaglio("AnimalFriend", "Guinzaglio per Cani", 30, "3 m", "Nylon");
$catalogo[] = $guinzaglio_nylon_l;
$guinzaglio_pelle = new Guinzaglio("AnimalFriend", "Guinzaglio per Cani", 20, "1,5 m", "Pelle");
$catalogo[] = $guinzaglio_pelle;
$guinzaglio_pelle_l = new Guinzaglio("AnimalFriend", "Guinzaglio per Cani", 40, "3 m", "Pelle");
$catalogo[] = $guinzaglio_pelle_l;


$zefiro = new Utente("Zefiro", true, 2022);
$zefiro->aggiuntaCarrello($cibo_coniglio);
$zefiro->aggiuntaCarrello($cibo_coniglio_l);
$zefiro->aggiuntaCarrello($cibo_salmone);
$zefiro->aggiuntaCarrello($cibo_pollo_l);

$demetrio = new Utente("Demetrio", false, 2025);
$demetrio->aggiuntaCarrello($guinzaglio_nylon);
$demetrio->aggiuntaCarrello($cuccia_legno_l);
$demetrio->aggiuntaCarrello($cibo_coniglio_l);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Animali</title>
</head>

<body>
    <h2>Prodotti disponibili</h2>
    <ul>
        <?php foreach ($catalogo as $prodotto) { ?>
            <li> <?php echo $prodotto->stampaInfo(); ?> </li>
        <?php } ?>
    </ul>

    
    <h2>Il tuo Carrello</h2>
    <ul>
        <?php foreach ($zefiro->carrello as $articoloCarrello) { ?>
            <li> <?php echo $articoloCarrello->stampaInfo(); ?> </li>
        <?php } ?>
    </ul>
    <h3>Totale: € <?php echo $zefiro->prezzo(); ?></h3>
    <h4><?php echo $zefiro->controlloCarta(); ?></h4>


    <h2>Il tuo Carrello</h2>
    <ul>

        <?php foreach ($demetrio->carrello as $articoloCarrello) { ?>
            <li> <?php echo $articoloCarrello->stampaInfo(); ?> </li>
        <?php } ?>
    </ul>
    <h3>Totale: € <?php echo $demetrio->prezzo(); ?></h3>
    <h4><?php echo $demetrio->controlloCarta(); ?></h4>

</body>

</html>