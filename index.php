<?php

    require __DIR__. "/models/Categoria.php";
    require __DIR__. "/models/Prodotto.php";

    //creazione di due prodotti:
    $peluche = new Prodotto("Peluche Orso", 15 . "euro", new Categoria ("cane"));
    $pallina = new Prodotto( "Pallina Arcobaleno", 5 . "euro",new Categoria("gatto"));

    $nuoviProdotti = [$peluche , $pallina];
    var_dump($nuoviProdotti);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commece</title>
</head>
<body>

    <?php foreach ($nuoviProdotti as $nuovoProdotto) { ?>
        
        
        <h2> Nome Prodotto:<?= $nuovoProdotto -> getNomeProdotto() ?> </h2>
        <h3> Prezzo Prodotto:<?= $nuovoProdotto -> getPrezzoProdotto() ?> </h3>


    <?php }?>

</body>
</html>