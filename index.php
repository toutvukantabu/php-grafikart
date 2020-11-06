<?php

require 'personnage.php';


$merlin = new Personnage("merlin");

$merlin->regenerer();


$harry=new Personnage("Harry");



var_dump($merlin);
var_dump($harry);