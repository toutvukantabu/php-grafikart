<?php
session_start();
require_once 'config.php';
require_once 'functions.php';
$title = 'Nous contacter';
date_default_timezone_set('Europe/Paris');
// Recuperer l'heure d'aujourd'hui $heure dans l'url
$heure = (int)($_GET['heure']?? date('G'));
$jour = (int)($_GET['jour'] ?? date('N') -1);
// recuperer les creneaux  d'aujourd'hui $creneaux
$creneaux = CRENEAUX[$jour];
// récuperer l'etat d'ouverture du magasin
$ouvert = in_creneaux($heure, $creneaux);

// Changement de couleur en fonction ouvert/fermé
// $color = 'green';
// if (!$ouvert) {
  //   $color = 'red';
  // }
  //Même chose en ternaire
  $color = $ouvert ? 'green' : 'red';
  
  require 'header.php';

 ?>

<div class="row">
  <div class="col-md-8">
  <h2>debug</h2>
  <?php dump($_SESSION); ?>
    <h2>nous contacter</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ipsum quo eaque cum veritatis
      consectetur asperiores quam, eum facere quod soluta amet ea nobis blanditiis ex eius expedita. Nulla, tempore.
    </p>
  </div>
    <div class="col-md-4">
  <?php if ($ouvert) : ?>
      <h2>Horaire d'ouvertures</h2>
      <div class="alert alert-success">
        le magasin sera ouvert </div>
    <?php else : ?>
      <div class="alert alert-danger">
        le magasin sera fermé </div>
    <?php endif ?>

    <form action="" method="GET">
      <div class="form-group">
      <!-- Première façon de l'écrire ( ne pas oublier de rajouter '?'dans les balises php) -->
        <!-- <select  class="form-control" name="jour">
          <php foreach (JOURS as $k => $jour) : ?>
            <option value="<= $k ?>"><= $jour ?></option>
          <php endforeach; ?>
        </select> -->
        <?= select('jour' , $jour , JOURS); ?>
      </div>

      <div class="form-group">
        <input class="form-control" type="number" name="heure" value="<?= $heure ?>">
      </div>
      <button class="btn btn-primary" type="submit">voir si le magasin est ouvert</button>
    </form>

    <ul>
      <?php foreach (JOURS as $k =>  $jour) : ?>
        <li <?php if ($k + 1 === (int)date('N')) : ?> style="color:<?= $color ?>" <?php endif ?>>
          <strong><?= $jour ?></strong> :
          <?= creneaux_html(CRENEAUX[$k]); ?>
        </li>
      <?php endforeach ?>
    </ul>
    </div>
</div>


<?php require 'footer.php'; ?>