<?php
//checkbox
$parfums = [
    'fraise' => 4,
    'chocolat' => 5,
    'vanille' => 3,
];
//radio
$cornets = [
    'pot' => 2,
    'cornet' => 3
];
//checkbox
$supplements = [
    'pépites de chocolat' => 1,
    'chantilly' => 0.5
];

require 'functions_jeu_v3.php';
require 'header.php';
?>

<!-- Affichage du recapitulatif de la commande -->
<?php 
$ingredients=[];
$total= 0;
if (isset( $_GET ['parfum'])){
    foreach ($_GET['parfum'] as $parfum) {
    if (isset($parfums[$parfum])){
$ingredients[] = $parfum;
$total +=  $parfums[$parfum];

    }
    }
}
if (isset( $_GET ['supplement'])){
    foreach ($_GET['supplement'] as $supplement) {
    if (isset($supplements[$supplement])){
$ingredients[] = $supplement;
$total +=  $supplements[$supplement];
    }
    }
}

if (isset( $_GET ['cornet'])){
 $cornet = $_GET['cornet'];
 if (isset($cornets[$cornet])){
     
     $ingredients[] = $cornet;
     $total +=  $cornets[$cornet];    
}  
}

?>

<!-- Exercice validation checkbox -->
<?php $title = "composez votre glace" ?>

<h1>Composez votre galce</h1>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">votre glace</h5>
                <ul>
                <?php foreach($ingredients as $ingredient): ?>
                <li> <?= $ingredient ?></li>
                <?php endforeach ?>
                </ul>
                <p>
                <strong>Prix : </strong> <?= $total?> €</p>
            </div>
        </div>
    </div>


    <div class="col-md-8">
        <h2>Choisissez vos parfums</h2>
        <form action="/jeu_v3.php" method="GET">
            <?php foreach ($parfums as $parfum => $prix) : ?>
                <div class="checkbox">
                    <label>
                        <?= checkbox('parfum', $parfum, $_GET) ?>
                        <?= $parfum ?>-<?= $prix ?> €
                    </label>
                </div>
            <?php endforeach ?>

            <h2>Choisissez votre cornet</h2>
            <?php foreach ($cornets as $cornet => $prix) : ?>
                <div class="checkbox">
                    <label>
                        <?= radio('cornet', $cornet, $_GET) ?>
                        <?= $cornet ?>-<?= $prix ?> €
                    </label>
                </div>
            <?php endforeach ?>
            <h2>Choisissez votre supplement</h2>
            <?php foreach ($supplements as $supplement => $prix) : ?>
                <div class="checkbox">
                    <label>
                        <?= checkbox('supplement', $supplement, $_GET) ?>
                        <?= $supplement ?>-<?= $prix ?> €
                    </label>
                </div>
            <?php endforeach ?>
            <button type="submit" class="btn btn-primary"> composer ma glace</button>
        </form>


    </div>
    <!-- Afficher les erreur sous forme de liste -->
    <pre>
    <h2>$_GET</h2>
    <?php var_dump($_GET) ?>  
</pre>
    <pre>
    <h2>$_POST</h2>
    <?php var_dump($_POST) ?>
</pre>
    <?php require 'footer.php'  ?>