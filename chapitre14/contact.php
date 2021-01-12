<?php 
$title = 'Nous contacter';
require_once 'config.php';
require_once 'functions.php';

// V1
  // $creneaux = creneaux_html(CRENEAUX);
// V2

require 'header.php'; ?>

<div class="row">
  <div class="col-md-8">
  <h2>nous contacter</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ipsum quo eaque cum veritatis 
consectetur asperiores quam, eum facere quod soluta amet ea nobis blanditiis ex eius expedita. Nulla, tempore.
</p>
</div>
<div class="alert alert-success">
le magasin est ouvert</div>
  <div class="col-md-4">
  <h2>Horaire d'ouvertures</h2>
  <?= date('l d F Y ')  ?>
  <ul>
  <?php foreach (JOURS as $k =>  $jour): ?>
  <li
<?php if($k +1 === (int)date ('N')): ?> style="color:green"<?php endif ?>>
  <strong><?=$jour?></strong>
<?= creneaux_html(CRENEAUX[$k]);?>
  </li>
  <?php endforeach ?>
  </ul>



  </div>
</div>

  </div>
<?php require 'footer.php'; ?>