<?php 
function ajouter_vue(): void{
$fichier = dirname(__dir__). DIRECTORY_SEPARATOR . 'chapitre20' . DIRECTORY_SEPARATOR . 'compteur';
//Creation d'un fichier compteur journalier
$fichier_journalier = $fichier . '-' . date('Y-m-d');
incrementer_compteur($fichier);
incrementer_compteur($fichier_journalier);
}


// :void permet a ce qu'il n'y ai aucun retour
function incrementer_compteur(string $fichier) : void{
    $compteur = 1;
    if (file_exists( $fichier)){
    //si le fichier existe, on l'incremente
    $compteur = (int)file_get_contents($fichier);
    $compteur++;
}
//sinon on crée le fichier 
file_put_contents( $fichier, $compteur);
}




function nombre_vues (){
    $fichier = dirname(__dir__). DIRECTORY_SEPARATOR . 'chapitre18' . DIRECTORY_SEPARATOR . 'compteur';
    return file_get_contents($fichier);

}


?>