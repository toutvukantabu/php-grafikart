<?php
$aDeviner = 150;
require 'header.php';
?>
<pre>
    <?php var_dump($_GET) ?>
</pre>
<?php if (isset($_GET['chiffre'])): ?>
<?php if ($_GET ['chiffre'] > $aDeviner):?>
Votre chiffre est trop grand 
<?php elseif ($_GET['chiffre'] < $aDeviner): ?>
votre chiffre est trop petit
<?php else: ?>
    Bravo ! vous avez deviné le chiffre  <?= $aDeviner?>
    <?php endif ?>
<?php endif ?>


<form action="/jeu_v1.php" method ='GET'>

<input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?php if (isset($_GET['chiffre'])){ echo htmlentities( $_GET ['chiffre']); }?>">
<input type="text" name="demo" value="test">
<input type="submit" value="deviner">

</form>
<?php require 'footer.php'  ?>