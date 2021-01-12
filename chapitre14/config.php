<!-- Travail sur les creneaux horaires -->
<!-- Une constante devra toujours etre en majuscule -->

<?php
//V1
// define('CRENEAUX',[
//     [8,12],
//     [14,19]
// ]);

//V avec tous les jours de la semaine
Define('JOURS', [
    'Lundi',
    'Mardi',
    'Mercredi',
    'Jeudi',
    'Vendredi',
    'Samedi',
    'Dimanche'
]);

define(
    'CRENEAUX',
    [
     [
            [8, 12],
            [14, 19]
        ],
      [
            [8, 12],
            [14, 19]
        ],
      [[8, 12]],

      [
            [8, 12],
            [14, 19]
        ],
       [
            [8, 12],
            [14, 19]
        ],
     
     [],
     []
    ]
);

?>