<?php

require __DIR__ . "/models/Categoria.php";
require __DIR__ . "/models/Prodotto.php";
require __DIR__ . "/models/ProdottoGioco.php";
require __DIR__. "/models/ProdottoAlimentare.php";
require __DIR__. "/models/ProdottoCuccia.php";

$catGatto= new Categoria("gatto");
$catCane = new Categoria("cane");
$catUccellini = new Categoria("uccellini");

//creazione di due prodotti con categoria:
$peluche = new Prodotto("Peluche Orso", 15 . "euro", new Categoria($catCane), "https://www.farmacosmo.it/166189-large_default/cross-knots-bears-peluche-cani-colori-assortiti-112705.jpg");
$pallina = new Prodotto("Pallina Arcobaleno", 5 . "euro",new Categoria($catGatto), "https://m.media-amazon.com/images/I/61SAtcHswcL.jpg");

$nuoviProdotti = [$peluche, $pallina,];
// var_dump($nuoviProdotti);

//creazione prodotti gioco con categoria:
$parcoGiochi = new ProdottoGioco("Parco Giochi", 35.99 . "euro", new Categoria("criceto"), "https://m.media-amazon.com/images/I/41aT26LmiBL._SL500_.jpg","marrone", "forma scivolo");
$mouse = new ProdottoGioco("Mouse Atomatico", 18.12 . "euro", new Categoria("gatto"), "https://m.media-amazon.com/images/I/71wV-QQycjL._AC_UF894,1000_QL80_.jpg", "grigio", "forma di topolino");
$altalena = new ProdottoGioco("Altalena Per Uccellini", 16.99 . "euro", new Categoria("uccellini"),"https://ae01.alicdn.com/kf/HLB1LxsiNNjaK1RjSZKzq6xVwXXaQ/6-Pack-Uccello-Altalena-Giocattoli-Pappagallo-Amaca-Campana-Giocattoli-Per-Budgie-Parakeets-Cocker-conures-E-Amore.jpg", "multicolor","Forma altalena");

$nuoviProdottiGioco = [$parcoGiochi, $mouse, $altalena];
// var_dump($nuoviProdottiGioco);


//creazione prodotti alimentari per diverse categorie
$almoNature = new ProdottoAlimentare("Almo Nature", 13.50 . " euro", new Categoria("cane"),"https://www.bauzaar.it/media/catalog/product/a/l/almo-nature-holistic-per-cane-small-adult-con-pesce-azzurro-e-riso-da-2-kg.jpg", "Croccantini", "Manzo e Riso");
$felix = new ProdottoAlimentare("Felix", 36.99 . " euro", new Categoria("gatto"),"https://www.purinashop.it/media/catalog/product/cache/74c1057f7991b4edb2bc7bdaa94de933/0/7/07613287487711_c1n1_44102394.jpg", "Cibo Umido", "Merluzzo e Tonno");
$donat = new ProdottoAlimentare("Donath", 4.69 . " euro", new Categoria("Uccellini"),"https://m.media-amazon.com/images/I/41SmgY9D5JL._AC_.jpg",  "Palline di Grasso" );

$nuovoProdottiAlim = [$almoNature, $felix, $donat];


// creazioni prodotti cuccia per categoria
$joejoy = new ProdottoCuccia("Joejoy", 23.66 ." euro", new Categoria("cane"), "https://www.giessepets.it/wp-content/uploads/cuccia-torino.jpg", "Lettino", "Cotone traspirante", "Per Taglia Piccola");
$PawHut = new ProdottoCuccia("Paw Hut Casetta Per Cani", 63.66 ." euro", new Categoria("cane"),"https://cdn.produceshop.it/26719-large_default/cuccia-casetta-per-cani-di-taglia-media-grande-in-plastica-giardino-bobby.jpg", "casetta", "Legno Trattato", "Per Taglia Grande");
$bps = new ProdottoCuccia(" BPS Gabbia Per Uccellini", 39.10 . " euro", new Categoria("uccellini"),"https://cdn.vegaooparty.it/images/rep_art/gra/232/7/232764/gabbia-per-uccelli-bianca-da-decorazione-30-cm.jpg", "Gabbietta", "Ferro e Plastica", "85 x 27");

$nuovoProdottoCuccia = [$joejoy,$PawHut,$bps]
?>

<!--DA QUI HTML. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
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
                            <img src="<?=$nuovoProdotto -> img  ?>" class="card-img-top" alt="<?= $nuovoProdotto->getNomeProdotto() ?>">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text"> Nome: <?= $nuovoProdotto->getNomeProdotto() ?></p>
                                <p class="card-text"> Prezzo: <?= $nuovoProdotto->getPrezzoProdotto() ?></p>
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
                <h1>Prodotti Gioco </h1>
                <div class="col d-flex">
                    <?php foreach ($nuoviProdottiGioco as $nuovoGioco) { ?>
                        <div  class="card d-flex" style="width: 18rem;">
                        <h5 class="card-title">Categoria:</h5>
                        <img src="<?=$nuovoGioco -> img  ?>" class="card-img-top" alt="<?= $nuovoGioco->getNomeProdotto() ?>">
                            <div class="card-body">
                                <p class="card-text"> Nome: <?= $nuovoGioco->getNomeProdotto() ?></p>
                                <p class="card-text"> Prezzo:  <?= $nuovoGioco->getPrezzoProdotto() ?></p>
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
    
    <div class="container ">
        <div class="row">
            <div class="col">
                <h1>Prodotti Alimentari </h1>
                <div class="col d-flex">
                    <?php foreach ($nuovoProdottiAlim as $nuovoAlimento) { ?>
                        <div  class="card d-flex" style="width: 18rem;">
                            <h5 class="card-title">Categoria:</h5>
                        <img src="<?=$nuovoAlimento -> img  ?>" class="card-img-top" alt="<?= $nuovoAlimento->getNomeProdotto() ?>">
                            <div class="card-body">
                                <p class="card-text"> Nome: <?= $nuovoAlimento->getNomeProdotto() ?></p>
                                <p class="card-text"> Prezzo:  <?= $nuovoAlimento->getPrezzoProdotto() ?></p>
                                <p class="card-text"> Tipologia: <?= $nuovoAlimento->getTipoAlimento() ?></p>
                                <p class="card-text"> Gusto: <?= $nuovoAlimento->getGustoAlimento() ?> </p>
                                
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
                <h1>Prodotti Cuccia </h1>
                <div class="col d-flex">
                    <?php foreach ($nuovoProdottoCuccia as $nuovaCuccia) { ?>
                        <div  class="card d-flex" style="width: 18rem;">
                            <h5 class="card-title">Categoria:</h5>
                        <img src="<?=$nuovaCuccia -> img  ?>" class="card-img-top" alt="<?= $nuovaCuccia->getNomeProdotto() ?>">
                            <div class="card-body">
                                <p class="card-text"> Nome: <?= $nuovaCuccia->getNomeProdotto() ?></p>
                                <p class="card-text"> Prezzo:  <?= $nuovaCuccia->getPrezzoProdotto() ?></p>
                                <p class="card-text"> Modello: <?= $nuovaCuccia->getModello() ?></p>
                                <p class="card-text"> Materiale: <?= $nuovaCuccia->getMateriale() ?> </p>
                                <p class="card-text"> Dimensioni: <?= $nuovaCuccia->getDimensioni() ?> </p>
                                
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