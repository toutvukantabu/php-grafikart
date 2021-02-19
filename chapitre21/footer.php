
</main>

<div class="row">

  <div class="col-md-4">
  
  <?php 
  require_once dirname(__DIR__) . DIRECTORY_SEPARATOR .  'chapitre20'  . DIRECTORY_SEPARATOR .  'compteur.php'  ;
  ajouter_vue();
 $vues = nombre_vues();  


  ?>
  <span>il y a <?= $vues?> visite<?php if($vues > 1):?>s<?php endif ?> sur le site</span>
  
  
  </div>

  <div class="col-md-4"></div>
 main
  <div class="col-md-4"></div>
  <div class="col-md-4"></div>
  <div class="col-md-4"></div>
<ul>
  <?= nav_menu();

?>
</ul>

</div> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      
  </body>
</html>
