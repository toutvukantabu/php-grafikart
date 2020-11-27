<?php


function bonjour($nom = null){

    if($nom = null){
        
        return "bonjour \n";
    }
return 'bonjour' . $nom . "\n";
}

$salutation = bonjour();
echo $salutation;



function repondre_oui_non(){


}