<?php

require __DIR__ . "/models/Categoria.php";
require __DIR__ . "/models/Prodotto.php";
require __DIR__ . "/models/ProdottoGioco.php";

//creazione di due prodotti con categoria:
$peluche = new Prodotto("Peluche Orso", 15 . "euro", new Categoria("cane"));
$pallina = new Prodotto("Pallina Arcobaleno", 5 . "euro", new Categoria("gatto"));

$nuoviProdotti = [$peluche, $pallina,];
var_dump($nuoviProdotti);

//creazione prodotti gioco con categoria:
$parcoGiochi = new ProdottoGioco("Parco Giochi", 35.99 . "euro", new Categoria("criceto"), "marrone", "forma scivolo");
$mouse = new ProdottoGioco("Mouse Atomatico", 18.10 . "euro", new Categoria("gatto"), "grigio", "forma di topolino");
$altalena = new ProdottoGioco("altalena Per Uccellini", 16.99 . "euro", new Categoria("uccellini"),"multicolor","Forma altalena");

$nuoviProdottiGioco = [$parcoGiochi, $mouse, $altalena];
var_dump($nuoviProdottiGioco);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>E-commece</title>
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col">
                <h1>Prodotti creati di base: </h1>
                <div class="col d-flex">
                    <?php foreach ($nuoviProdotti as $nuovoProdotto) { ?>
                        <div  class="card d-flex" style="width: 18rem;">
                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text"> Nome Prodotto: <?= $nuovoProdotto->getNomeProdotto() ?></p>
                                <p class="card-text"> Prezzo Prodotto: <?= $nuovoProdotto->getPrezzoProdotto() ?></p>
                                <a href="#" class="btn btn-primary">Acquista</a>
                            </div>
                        </div>
                     <?php } ?>
                </div>
            </div>
        </div>
    </div>


    <div class="container ">
        <div class="row">
            <div class="col">
                <h1>Prodotti gioco </h1>
                <div class="col d-flex">
                    <?php foreach ($nuoviProdottiGioco as $nuovoGioco) { ?>
                        <div  class="card d-flex" style="width: 18rem;">
                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text"> Nome Prodotto: <?= $nuovoGioco->getNomeProdotto() ?></p>
                                <p class="card-text"> Prezzo Prodotto:  <?= $nuovoGioco->getPrezzoProdotto() ?></p>
                                <p class="card-text"> Colore: <?= $nuovoGioco->getColoreGioco() ?></p>
                                <p class="card-text"> Forma: <?= $nuovoGioco->getFormaGioco() ?> </p>
                                
                                <a href="#" class="btn btn-primary">Acquista</a>
                            </div>
                        </div>
                     <?php } ?>
                </div>
            </div>
        </div>
    </div>


    


</body>

</html>