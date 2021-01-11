<!--  Fonction pour active dans navbar BOOTSTRAP 5-->

<?php
require_once 'functions.php';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <!--  Premiere façon de l'écrire -->
    <title><?php if (isset($title)) :
                echo $title;
            else :
                echo 'Mon site';
            endif
            ?>
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>



    <!--  Premiere façon de l'ecrive avec variable super globale -->
    <!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 ">
         <div class="container-fluid">
             <a class="navbar-brand" href="#">Mon site</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                 <ul class="navbar-nav me-auto mb-2 mb-md-0 ">
                     <li class="nav-item ">
                         <a class="nav-link  <?php //if ($_SERVER['SCRIPT_NAME']=== '/index.php'): 
                                                ?>active<?php // endif
                                                        ?>" aria-current="page" href="/index.php">accueil</a>
                     </li>
                     <li class="nav-item ">
                         <a class="nav-link <?php // if ($_SERVER['SCRIPT_NAME']=== '/contact.php'): 
                                            ?>active<?php // endif
                                                    ?>" aria-current="page" href="/contact.php">contact</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
     <main class="container"> -->


    <!--  deuxième façon de l'ecrive avec une function -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mon site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 ">
                    <?= nav_menu('nav_link'); ?>
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">