<?php

/* Verifier si la fonction existe */
function nav_item(string $lien, string $titre, $linkClass = ''): string
{
    $linkClass = 'nav-item';
    $classe = 'nav-link ';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe = $classe  . 'active';
        //$classe .= ' active';
    }
    //return' <li class="nav-item">
    //<a class="'. $classe . '" href="' . $lien . '"> ' . $titre . '</a>
    ///</li> ';

    /* Deuxieme façon de l'ecrire avec de l'heredoc */
    return <<<HTML
         <li class="$linkClass">
        <a class="$classe" href=" $lien">$titre</a>
    </li>
    <!-- Identation importante, à coller a gauche obligatoirement la balise 'HTML' -->
HTML;
}
function nav_menu(string $linkClass = ''): string
{

    return
        nav_item('/index.php', 'Accueil', $linkClass) .
        nav_item('/contact.php', 'contact', $linkClass);
}



// CREER des var dump

function dump($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}


function creneaux_html(array $creneaux)
{

    // v1 voir si un tableau est vide ou pas  

    // if (count($creneaux) === 0){
    //     return 'fermé';
    // }

    //V2
    if (empty($creneaux)) {
        return 'fermé';
    }
    $phrases = [];

    foreach ($creneaux as $creneau) {

        $phrases[] = "de {$creneau[0]}h à {$creneau[1]}h";
    }
    //on utilise implode pour lier les deux tableaux

    return 'ouvert  ' . implode(' et ', $phrases);
}

function in_creneaux(int $heure, array $creneaux): bool
{
    foreach ($creneaux as $creneau) {
        $debut = $creneau[0];
        $fin = $creneau[1];

        if ($heure >= $debut && $heure < $fin) {
            return true;
        }
    }
    return false;
}
// valider le jour dans le select 
function select(string $name, $value, array $options): string
{
    $html_options = [];

    foreach ($options as $k => $option) {

        $attributes = $k == $value ? 'selected' : '';
        $html_options[] = "<option value= '$k' $attributes>$option</option>";
    }
    return "<select class='form-control' name ='$name'" . implode($html_options) . '<selected>';
}