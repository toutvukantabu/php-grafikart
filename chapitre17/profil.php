<?php 


$nom = null;
if(!empty($_COOKIE['utilisateur'])){
$nom=$_COOKIE['utilisateur'];

} 
if(!empty($_POST['nom'])){
setcookie('utilisateur', $_POST['nom']);
$nom = $_POST['nom'];
} 
?>
<?php require '../elements/header.php'; ?>

  <?php if($nom): ?>
  <h1>Bonjour <?= htmlentities($nom)?> </h1>

  <?php else: ?>  
<form action="" method="POST">
<div class="form-group">

<input type="text" name="nom" placeholder="entrez votre nom">
<input type="submit" value="se connecter">
<?php endif ?>

</div>


</form>

<?php require '../elements/footer.php'; ?>



