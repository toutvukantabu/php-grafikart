<!-- += permet d'incrémenter de 2 autre manière de l'écrire ex: $i= $i +2; -->
<!-- \n affiche liste verticale -->
<!-- readline permet d'inviter l'utilisateur à renseigner des données -->
<?php
$notes = [10, 15, 16];

for ($i = 0; $i < 3; $i++) {
    echo '- ' . $notes[$i] . "\n";
}

?>
<!-- deuxième solution on peut utiliser un foreach -->

<?php
$notes = [10, 15, 16];
foreach ($notes as $note) {
    echo "- $note \n";
}

/* exemple foreach avec des élèves */

$eleves = [
    'cm2' => 'jean',
    'cm1' => 'marc'
];

foreach ($eleves as $classe => $eleve) {
    echo "$eleve est dans la classe $classe \n";
}

/* exemple avec classe et liste d'éleves */

$eleves2 = [
    'cm2' => ['jean', 'gabin', 'kristenn', 'Catherine'],
    'cm1' => ['marc', 'capucine', 'Nicolas']
];

foreach ($eleves2 as $classe2 => $listEleves) {
    echo "la classe de $classe2 a comme élèves: \n ";
    foreach ($listEleves as $eleve2) {
        echo "- $eleve2\n ";
    }
    echo "\n";
}

/* exercice notes */

/* 
demande à l'utilisateur de rentrer une note ou de taper fin
chaque note est sauvegardée dans un tableau $notes 
à la fin on affiche le tableau sous forme de liste */

$note = [];
$action = null;

// tant que l'utilisateur ne tape pas "fin "
while ($action !== 'fin') {

    $action = readline('entrez une note (ou \'fin\' pour terminer la saisie) : ');

    //on ajoute la note tapée dans le tableau 
    if ($action !== 'fin') {
        $note[] = (int)$action;
    }
}
// Pour chaques notes dans notes
foreach ($notes as $note) {

    // On affiche " - note"
    echo "- $note \n";
}


/* Deuxième façon de l'écrire */


$note2 = [];
$action2 = null;

// tant que l'utilisateur ne tape pas "fin "
while (true) {

    $action2 = readline('entrez une note (ou \'fin\' pour terminer la saisie) : ');

    //on ajoute la note tapée dans le tableau 
    if ($action2 === 'fin') {
    break;
}
        else{
    
            $note2[] = (int)$action2;
        }
}
// Pour chaques notes dans notes
foreach ($notes2 as $note2) {

    // On affiche " - note"
    echo "- $note2 \n";
}

