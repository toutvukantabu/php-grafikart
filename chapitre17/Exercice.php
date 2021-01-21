<?php
$age = null;

if (!empty($_POST['birthday'])) {
    setcookie('birthday', $_POST['birthday']);
    // penser a rajouter la ligne du dessous pour que le cookies pris en compte soit celui du $_POST 
    $_COOKIE['birthday'] = $_POST['birthday'];

}

if (!empty($_COOKIE['birthday'])) {
    $birthday = (int)$_COOKIE['birthday'];
    $age = (int)date('Y') - $birthday;
}

require '../elements/header.php';
?>
<?php if ($age >= 18) :
?>
    <h1>contenu pour adulte</h1>
<?php elseif ($age !== null) : ?>
    <div class="alert-danger"> Vous n'avez pas l'âge requis petit saligaud</div>
<?php else :  ?>
    <form action="" method="POST">
        <select name="birthday" id="birthday" class="form-control">
            <?php for ($i = 2010; $i > 1919; $i--) : ?>
                <option value="<?= $i ?>"> <?= $i ?></option>
            <?php endfor ?>
        </select>
        <input type="submit" value="valider">
    </form>
<?php endif ?>

<?php require '../elements/footer.php'; ?>