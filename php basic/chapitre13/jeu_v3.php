<?php
//checkbox
$parfum = [
    'fraise'=>4,
    'chocolat'=>5,
    'vanille'=>3,
];
//radio
$cornet=[
    'pot'=>2,
    'cornet'=>3
];
//checkbox
$supplements = [
    'pépites de chocolat'=>1,
    'chantilly'=>0.5
];

require 'header.php'
?>

<!-- 
Affichage des alertes  -->

<!-- Exercice validation checkbox -->
<h1>Composez votre galce</h1>
<form action="/jeu_v3.php" method ="GET">
<?php foreach ($parfums as $parfum =>$prix): ?>
<div class="checkbox">
    <label >
<input type="checkbox" name="parfum[]" value =" <?= $parfum ?>">
<?= $parfum ?>-<?= $prix ?>

    </label>
</div>
<?php endforeach ?>
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