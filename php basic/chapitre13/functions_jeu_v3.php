<!-- pour avoir une glace il me faut
selectionner un ou plusieur parfum
selectionner un  seul récipient
selectionner aucun ou plusieur supplement -->

<?php 


function checkbox(string $name , string $value , array $data) : string{

    //On verifie si les parfun existent 
    $attributes ='';
    if (isset ($data [$name]) &&  in_array($value, $data[$name])){
        $attributes .= 'checked';
    }
    //Affichage des différents parfums
return <<<HTML
<input type = "checkbox" name = "{$name}[]" value = "$value" $attributes> 

HTML;
}
function radio(string $name , string $value , array $data) : string{

    //On verifie si les parfun existent 
    $attributes ='';
    if (isset ($data [$name]) &&  $value === $data[$name]) {
        $attributes .= 'checked';
    }
    //Affichage des différents parfums
return <<<HTML
<input type = "radio" name = "{$name}" value = "$value" $attributes> 

HTML;
}

function dump($variable){
echo '<pre>';
var_dump($variable);
echo '</pre>';
}