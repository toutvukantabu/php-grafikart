<?php
$aDeviner = 150;
$erreur = null;
$succes = null;
$value = null;
if (isset($_POST['chiffre'])) {

    $value = (int)$_POST['chiffre'];
}
if ($value > $aDeviner) {

    $erreur = "votre chiffre est trop grand";
} elseif ($value < $aDeviner) {

    $erreur = "votre chiffre est trop petit";
} else {
    $succes = "Bravo! Vous avez deviné le chiffre <strong> $aDeviner";
}
require 'header.php'
?>

<!-- Affichage des alertes  -->

<?php if ($erreur) : ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
<?php elseif ($succes) : ?>
    <div class="alert alert-success">
        <?= $succes ?>
    </div>
<?php endif ?>

<form action="/jeu_v2.php" method='GET'>
    <div class="form-group">
        <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>">


        <input type="submit" class="btn btn-primary" value="deviner">
    </div>
</form>

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
