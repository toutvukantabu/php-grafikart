<?php 
session_start();
$_SESSION['role']='administrateur';
$title= "Page d'accueil";

require 'header.php'; ?>

  <div class="starter-template text-center py-5 px-3">
    <h1>Exercice sur les dates</h1>
  
  </div>



  <?php require 'footer.php'; ?>