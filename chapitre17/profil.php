<?php 
$nom = null;

if(!empty($_GET['action']) && $_GET['action'] === 'deconnecter'){
    unset($_COOKIE['utilisateur']);
    setcookie('utilisateur', '' , time() - 10);
}


if(!empty($_COOKIE['utilisateur'])){
$nom = $_COOKIE['utilisateur'];

} 
if(!empty($_POST['nom'])){
setcookie('utilisateur', $_POST['nom']);
$nom = $_POST['nom'];
} 
 require '../elements/header.php'; 
?>

  <?php if($nom): ?>
  <h1>Bonjour <?= htmlentities($nom)?> </h1>
<a href="profil.php?action=deconnecter">Se déconnecter</a>
  <?php else: ?>  
<form action="" method="POST">
<div class="form-group">

<input type="text" name="nom" placeholder="entrez votre nom">
<input type="submit" value="se connecter">
<?php endif ?>

</div>


</form>

<?php require '../elements/footer.php'; ?>



