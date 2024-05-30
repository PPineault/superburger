<?php
// le tire différent pour les autres page
if (!isset($pageTitle)) {
    $pageTitle = "";
}

// le meta donnée description  différent pour les autres page
if (!isset($metades)) {
    $metades = "";
}




?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./css/style.css" media="screen">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./node_modules/leaflet/dist/leaflet.css">
    <link rel="stylesheet" href="./node_modules/leaflet.fullscreen/Control.FullScreen.css">
    <script src="./node_modules/leaflet/dist/leaflet.js"></script>
    <script src="./node_modules/leaflet.fullscreen/Control.FullScreen.js"></script>
    <script src="./js/scripts.js" defer>
    </script>
    <!-- Meta- description de la page -->

    <meta name="description" content="<?= $metades ?>">
    <!-- Meta- nom de l'auteur -->
    <meta name="author" content="Patrick-Pineault">
    <title><?= $pageTitle ?></title>


    <!--images favorie -->
    <link rel="icon" href="./images/favicon.ico" type="image/-x-icon">

</head>

<body>

    <header>
        <nav class="navbar">
            <ul class="nav-menu">
                <li class="nav-item">

                    <a class="nav-link" href="index.php">Menu Du Restaurant</a>

                    <button class="nav-link sub-menu-toggle subbtn  " title="bouton pour afficher le sous-menu"> <i class="fas fa-chevron-down"> </i> </button>


                    <ul class="sub-menu">
                        <li><a href="index.php#poutine">Poutines</a></li>
                        <li><a href="index.php#extra">extra</a></li>
                        <li><a href="index.php#acotes">À-cotés</a></li>
                        <li><a href="index.php#Aperitifs">Apéritifs</a></li>
                        <li><a href="index.php#Breuvages">Breuvages</a></li>
                        <li><a href="index.php#super-dogs">super-dogs</a></li>
                        <li><a href="index.php#x-men">Les x-men- super Sous-marin 7"</a></li>
                        <li><a href="index.php#Spaghetti">Spaghetti</a></li>
                        <li><a href="index.php#menu-enfant">Menu Petits Héros</a></li>
                        <li><a href="index.php#salades">salades</a></li>
                        <li><a href="index.php#hamburger">hamburger</a></li>
                        <li><a href="index.php#mayos"> Nos mayos</a></li>

                    </ul>


                </li>
                <li class="nav-item">
                    <a class="nav-link" href="info.php">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galerie.php">Galerie d'image</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <div>
                <img class="logo" src="./images/logo.jpg" alt="logo-de-Super-Burger">
            </div>
        </nav>
        <img src="./images/baniere.jpg" alt="image-banière">
        <h1>Les meilleurs Burger en ville</h1>
    </header>