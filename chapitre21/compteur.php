<?php
function ajouter_vue(): void
{
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'chapitre21' . DIRECTORY_SEPARATOR . 'compteur';
    //Creation d'un fichier compteur journalier
    $fichier_journalier = $fichier . '-' . date('Y-m-d');
    incrementer_compteur($fichier);
    incrementer_compteur($fichier_journalier);
}


// :void permet a ce qu'il n'y ai aucun retour
function incrementer_compteur(string $fichier): void
{
    $compteur = 1;
    if (file_exists($fichier)) {
        //si le fichier existe, on l'incremente
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
    }
    //sinon on crée le fichier 
    file_put_contents($fichier, $compteur);
}



function nombre_vues(): string
{
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'chapitre21' . DIRECTORY_SEPARATOR . 'compteur';
    return file_get_contents($fichier);
}

function nombre_vues_mois(int $annee, int $mois): int
{
    $mois = str_pad($mois, 2, '0', STR_PAD_LEFT);
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'chapitre21' . DIRECTORY_SEPARATOR . 'compteur-' . $annee . '-' . $mois . '-' . '*';
    $fichiers = glob($fichier);
    $total = 0;
    foreach ($fichiers as $fichier) {

        $total += (int) file_get_contents($fichier);
    }
    return  $total;
}
function nombre_vues_detail_mois(int $annee, int $mois): array
{
    $mois = str_pad($mois, 2, '0', STR_PAD_LEFT);
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'chapitre20' . DIRECTORY_SEPARATOR . 'compteur-' . $annee . '-' . $mois . '-' . '*';
    $fichiers = glob($fichier);
    $visites = [];
    foreach ($fichiers as $fichier) {
        $parties = explode('-', basename($fichier));
        $visites[] = [
            'annee' => $parties[1],
            'mois' => $parties[2],
            'jour' => $parties[3],
            'visite' => file_get_contents($fichier)

        ];
     
    }
    return $visites;
}
