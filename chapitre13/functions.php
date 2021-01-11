<?php

/* Verifier si la fonction existe */ 
    function nav_item(string $lien, string $titre, $linkClass = ''): string
    {
        $linkClass='nav-item';
        $classe = 'nav-link ';
        if ($_SERVER['SCRIPT_NAME'] === $lien) {
            $classe = $classe  . 'active';
            //$classe .= ' active';
        }

        // Premiere façon de l'écrire
        
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
    function nav_menu ( string $linkClass='') : string {

return 
nav_item('/index.php', 'Accueil', $linkClass) .
nav_item('/contact.php', 'Accueil', $linkClass);

    };

?>
