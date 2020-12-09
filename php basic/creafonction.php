<?php

/* declare(strict_types=1)
Empeche toute conversion de chaine de caractère */

/* 
function bonjour($nom = null){

    if($nom = null){
        
        return "bonjour \n";
    }
return 'bonjour' . $nom . "\n";
}

$salutation = bonjour();
echo $salutation; */


//exercice demander creneau ouverture fermeture

function repondre_oui_non(string $phrase) : bool{
 $reponse = readline($phrase . "(o)ui / (n)on : ");
 if($reponse === 'o'){
     return true;
 }elseif($reponse === 'n'){
     return false;
 }
}


function demander_creneau($phrase = 'Veuillez entrer un creneau')
{
    echo $phrase . "\n";
    while (true) {
        $ouverture = (int)readline('Heure d\'ouverture : ');
        if ($ouverture >= 0 || $ouverture > 23) {
            break;
        }
    }
    while (true) {

        $fermeture = (int)readline('Heure de fermeture : ');
        if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
            break;
        }
    }
    return [$ouverture, $fermeture];
}

function demander_creneaux( $phrase = "veuillez entrer vos creneaux"){
    $creneaux=[];
    $continuer=true;
    while($continuer){
        
        $creneaux[] = demander_creneau(); 
        $continuer = repondre_oui_non('voulez vous continuer ? ');
    }
    return $creneaux;
}

$creneaux = demander_creneaux('entrez vos créneaux');
var_dump($creneaux);
