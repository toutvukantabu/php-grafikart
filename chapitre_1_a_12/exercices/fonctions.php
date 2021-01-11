
<?php

/* Exercice palyndrome 
=======================*/
/* 
$mot =readline('veuillez entrer un mot : ');
$mot=strtolower($mot);
$reversere = strrev($mot);
if ($mot === $reversere){
    echo " Le mot $mot est un palyndrome";
}
else{

    echo " le mot $mot , n'est pas un palyndrome"; 
} */

/* Deuxieme façon de l'écrire */

/* 
$mot =readline('veuillez entrer un mot : ');
$reversere = strtolower(strrev($mot));
if (strtolower($mot) === $reversere){
    echo " Le mot $mot est un palyndrome";
}
else{

    echo " le mot $mot , n'est pas un palyndrome"; 
} */


/* Troisième façon façon de l'écrire avec ajout fin de programme */

// while (true) {
//     $mot = readline(' veuillez entrer un mot ou appuyez sur entrer pour terminer le script : ');
//     if ($mot === '') {
//         exit('fin de programme');
//     }
//     $reversere = strtolower(strrev($mot));
//     if (strtolower($mot) === $reversere) {
//         echo "Le mot $mot est un palyndrome \n";
//     } else {

//         echo " le mot $mot , n'est pas un palyndrome \n";
//     }
// }




/* Moyenne note tableau 
========================*/

// Ma correction 

/* $notes= [15,15,18];
$moyenne= array_sum($notes)/count($notes);
var_dump($moyenne);

// Correction Grafikart

$notes= [15,15,18];
$moyenne= array_sum($notes);
$count = count($notes);
echo "vous avez" .round($sum/$count ,2) . " de moyenne"; */

// le ' ,2 ' sert a donner deux chiffres après la  virgule


/* Exercice filtre insulte
======================= */

/* $insultes = ['merde','con'];

$phrase = readline('entrez une phrase : ');

foreach($insultes as $insulte){
    //calcul longueur gros mot pour les *****
    $taille = strlen($insulte);
    $replace = str_repeat('*', $taille);
   $phrase = str_replace($insulte , $replace, $phrase);
}

echo $phrase;  */

//deuxième façon de l'écrire

/* foreach($insultes as $insulte){
    //calcul longueur gros mot pour les *****
    $replace = str_repeat('*', strlen($insulte));
   $phrase = str_replace($insulte , $replace, $phrase);
}
echo $phrase; */

//troisième façon de l'écrire 

/* $insultes = ['merde','con'];
$asterisque =[];
foreach($insultes  as $insulte){
    
    $asterisque[] = str_repeat( '*', strlen($insulte));
}
$phrase = readline('entrez une phrase : ');
$phrase = str_replace($insultes,$asterisque , $phrase);

echo $phrase;  */


// Quatrième façon avec ajout de la première lettre du gros mot

//trouver la première lettre du Mot
//trouver la taille du mot(-1)
//concatener avec la première lettre du string repeat 

$insultes = ['merde','con'];
$asterisque =[];


foreach($insultes  as $insulte){
    $lettre =  substr($insulte, 0,1);
    $asterisque[] = $lettre . str_repeat( '*', strlen($insulte)-1);

}
$phrase = readline('entrez une phrase : ');
$phrase = str_replace($insultes,$asterisque , $phrase);

echo $phrase; 


