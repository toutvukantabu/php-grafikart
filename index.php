<?php

// require 'personnage.php';


// $merlin = new Personnage("merlin");
// $merlin->setNom('Melin ');
// $merlin->regenerer();


// $harry=new Personnage("Harry");

// $merlin ->attaque($harry);

// if ($harry->mort()){
// echo 'Harry est mort :(';

// }else{
//     echo'harry a survécu avec '. $harry->vie . ' points de vie';
// }
// var_dump($merlin->atk);
// var_dump($harry);


require 'form.php';

$form = new Form($_POST);

?>
<form action="#" method="post">
    <?php
echo $form->input('username');
echo $form->input('password');
echo $form->submit();
?>
</form>




