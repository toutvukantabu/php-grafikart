<?php

// DEUXIEME EXERCICE
/* 
on veut demander à l'utilisateur de rentrer les horaires d'ouverture d'un magasin 
on demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert */

// ma vision
/* demande de l'utilisateur d'indiquer les horaires du magasin en indiquant si ouvert ou fermé
chaque horaire est renseigné dans un tableau
ensuite l'utilisatur renseigne un horaire avec un réponse ouvert ou fermé */

/* correctiopn grafikart */

// on demmande à l'utilisateur de rentrer un créneaux
// on demande l'heure de début
// on demande l'heure de fin
//on verifie que l'heure de début < l'heure fin
// on demande si il veut rajouter un créneaux
// on demande à l'utilisateur de rentrer une  heure
// on affiche l'etat d'ouverture du magasin

$horaireDebut=null;
$horaireFin=null; 
$horaireOuverture=[];

while(true){

    $horaireDebut = (int)readline('entrez l\'horaire du début: ');
    $horaireFin = (int)readline('entrez l\'horaire de fin: ');
    
    if($horaireDebut >= $horaireFin)  {
        
        echo "le créneau d'heure d'ouverture ($horaireDebut)h ne peut pas être inférieur ou gal au crénaux de feermeture ($horaireFin)\n";
    }
    else{
        $horaireOuverture[]= [$horaireDebut,$horaireFin];
        $action = readline('voulez vous enregistrer un nouveau créneau? (o/n): ');
        
        if($action === 'n'){
        break;
    }
   
    }
    
}

// Pour afficher les foraire du magasin
 
echo 'le magasin est ouvert de ';
foreach($horaireOuverture as $k =>$horaireOuverture){
    if($k > 0){
        echo ' et de ';
    }
   echo " {$horaireOuverture[0]}h à {$horaireOuverture[1]}h";

}




$heure = (int)readline("Aquelle heure voulez vous visiter le magasin? ");
$creneauTrouve=false;

foreach($horaireOuverture as $horaireOuverture){
    if($heure >= $horaireOuverture[0] && $heure <= $horaireOuverture[1] ){
        $creneauTrouve=true;
        echo "le magasin est ouvert";
    }if($creneauTrouve){

        echo'le magasin est ouvert';
    }
    else{
        echo 'desolé le magasin est fermé :(';
    }
    
};