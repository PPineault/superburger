<?php
$pageTitle = 'Super Burger  Menu  Restaurant';
$metades = ' Super Buger page du menu du restaurant';
include_once "partials/header.php";
?>



<main id="menu">
    <?php

    include './DB_PHP_Scripts/connection.php';
    include './DB_PHP_Scripts/requete.php';

    // Récupérer les données des poutines
    $poutineData = getPoutineData($conn);
    // Récupérer les données des extra
    $extraData = getExtraData($conn);
    // Récupérer les données des À-cotés
    $acotesData = getAcotesData($conn);
    //Récupérer les données des aperitifs
    $aperitifsData = getaperitifs($conn);
    //Récupérer les données des breuvages
    $breuvageData =  getbreuvages($conn);
    //Récupérer les données des superdogs
    $superdogsData =   getsuperdogs($conn);
    //Récupérer les données des  Les x-men- super Sous-marin 7"
    $xmenData = getxmen($conn);
    //Récupérer les données des spaghetti
    $spaghettiData = getspaghetti($conn);
    //Récupérer les données de Menu Petits Héros (12 ans et moins) 
    $menuenfantData = getmenuenfant($conn);
    //Récupérer les données des salades
    $saladesData = getsalades($conn);
    //Récupérer les données des hamburger
    $hamburgerData = gethamburger($conn);
    //Récupérer les données des  accompagnement à hamburger
    $accompagnementhamburgerData = getaccompagnementhamburger($conn);
    //Récupérer les données de nos mayos
    $mayosData = getnosmayos($conn);


    // Afficher les poutines
    echo "<section id='poutine'>";
    echo "<h2> Poutines </h2>";
    if ($poutineData !== null) {
        echo "<table>";
        echo "    <tbody>";
        while ($row = $poutineData->fetch(PDO::FETCH_ASSOC)) {
            echo "        <tr>";
            echo "            <td>" . $row['nom'] . "</td>";
            echo "            <td>" . $row['description'] . "</td>";
            echo "            <td>" . $row['nomformats'] . "</td>";
            // echo "            <td>" . $row['prix'] . "</td>";
            echo "      <td class='price'><span class='price-value'>" . $row['prix'] . "</span><span class='price-symbol'>$</span></td>";
            echo "        </tr>";
        }
        echo "    </tbody>";
        echo "</table>";
    } else {
        echo "Aucune donnée de poutine disponible.";
    }
    echo "</section>";
    // Afficher les extra
    echo "<section id='extra'>";
    echo "<h2> Extra </h2>";
    if ($extraData !== null) {

        echo "<table>";
        echo "    <tbody>";
        while ($row = $extraData->fetch(PDO::FETCH_ASSOC)) {
            echo "        <tr>";
            echo "            <td>" . $row['nom'] . "</td>";
            echo "            <td>" . $row['nomformats'] . "</td>";
            //echo "            <td>" . $row['prix'] . "</td>";
            echo "      <td class='price'><span class='price-value'>" . $row['prix'] . "</span><span class='price-symbol'>$</span></td>";
            echo "        </tr>";
        }
        echo "    </tbody>";
        echo "</table>";
    } else {
        echo "Aucune donnée extra disponible.";
    }
    echo "</section>";
    echo "<section id='acotes'>";
    echo "<h2> À-cotés </h2>";
    // Afficher les À-cotés
    if ($acotesData !== null) {

        echo "<table>";
        echo "    <tbody>";
        while ($row = $acotesData->fetch(PDO::FETCH_ASSOC)) {
            echo "        <tr>";
            echo "            <td>" . $row['nom'] . "</td>";
            echo "            <td>" . $row['description'] . "</td>";
            echo "            <td>" . $row['nomformats'] . "</td>";
            //echo "            <td>" . $row['prix'] . "</td>";
            echo "      <td class='price'><span class='price-value'>" . $row['prix'] . "</span><span class='price-symbol'>$</span></td>";
            echo "        </tr>";
        }
        echo "    </tbody>";
        echo "</table>";
    } else {
        echo "Aucune donnée de À-cotés disponible.";
    }
    echo "</section>";
    echo "<section id='Aperitifs'>";
    echo "<h2>  Apéritifs </h2>";
    // Afficher les Apéritifs
    if ($aperitifsData !== null) {
        echo "<table>";
        echo "    <tbody>";
        while ($row = $aperitifsData->fetch(PDO::FETCH_ASSOC)) {
            echo "        <tr>";
            echo "            <td>" . $row['nom'] . "</td>";
            echo "      <td class='price'><span class='price-value'>" . $row['prix'] . "</span><span class='price-symbol'>$</span></td>";
            echo "        </tr>";
        }
        echo "    </tbody>";
        echo "</table>";
    } else {
        echo "Aucune donnée d'Apéritifs disponible.";
    }
    echo "</section>";
    echo "<section id='Breuvages'>";
    echo "<h2>  Breuvages </h2>";
    // Afficher les Breuvages
    if ($breuvageData !== null) {
        echo "<table>";
        echo "    <tbody>";
        while ($row = $breuvageData->fetch(PDO::FETCH_ASSOC)) {
            echo "        <tr>";
            echo "            <td>" . $row['nom'] . "</td>";
            echo "      <td class='price'><span class='price-value'>" . $row['prix'] . "</span><span class='price-symbol'>$</span></td>";
            echo "        </tr>";
        }
        echo "    </tbody>";
        echo "</table>";
    } else {
        echo "Aucune donnée de Breuvages disponible.";
    }
    echo "</section>";
    echo "<section id='super-dogs'>";
    echo "<h2> super-dogs </h2>";
    // Afficher les super-dogs
    if ($superdogsData !== null) {
        echo "<table>";
        echo "    <tbody>";
        while ($row = $superdogsData->fetch(PDO::FETCH_ASSOC)) {
            echo "        <tr>";
            echo "            <td>" . $row['nom'] . "</td>";
            echo "            <td>" . $row['description'] . "</td>";
            echo "      <td class='price'><span class='price-value'>" . $row['prix'] . "</span><span class='price-symbol'>$</span></td>";
            echo "        </tr>";
        }
        echo "    </tbody>";
        echo "</table>";
    } else {
        echo "Aucune donnée de super-dogs disponible.";
    }
    echo "</section>";
    echo "<section id='x-men'>";
    echo '<h2> Les x-men- super Sous-marin 7" </h2>';
    // Afficher  Les x-men- super Sous-marin 7"
    if ($xmenData !== null) {
        echo "<table>";
        echo "    <tbody>";
        while ($row = $xmenData->fetch(PDO::FETCH_ASSOC)) {
            echo "        <tr>";
            echo "            <td>" . $row['nom'] . "</td>";
            echo "            <td>" . $row['description'] . "</td>";
            echo "      <td class='price'><span class='price-value'>" . $row['prix'] . "</span><span class='price-symbol'>$</span></td>";
            echo "        </tr>";
        }
        echo "    </tbody>";
        echo "</table>";
    } else {
        echo "Aucune donnée de Les x-men- super Sous-marin 7\" disponible.";
    }
    echo "</section>";
    echo "<section id='Spaghetti'>";
    echo '<h2>Spaghetti </h2>';
    echo "<p>servi avec petit pain à l'ail et parmesan</p>";
    // Afficher les Spaghetti
    if ($spaghettiData !== null) {
        echo "<table>";
        echo "    <tbody>";
        while ($row = $spaghettiData->fetch(PDO::FETCH_ASSOC)) {
            echo "        <tr>";
            echo "            <td>" . $row['nom'] . "</td>";
            echo "            <td>" . $row['description'] . "</td>";
            echo "      <td class='price'><span class='price-value'>" . $row['prix'] . "</span><span class='price-symbol'>$</span></td>";
            echo "        </tr>";
        }
        echo "    </tbody>";
        echo "</table>";
    } else {
        echo "Aucune donnée de Spaghetti disponible.";
    }
    echo "</section>";
    echo "<section id='menu-enfant'>";
    echo '<h2>Menu Petits Héros  </h2>';
    echo '<p> (12 ans et moins) </p>';
    // Afficher le Menu Petits Héros (12 ans et moins)
    if ($menuenfantData !== null) {
        echo "<table>";
        echo "    <tbody>";
        while ($row = $menuenfantData->fetch(PDO::FETCH_ASSOC)) {
            echo "        <tr>";
            echo "            <td>" . $row['nom'] . "</td>";
            echo "            <td>" . $row['description'] . "</td>";
            echo "      <td class='price'><span class='price-value'>" . $row['prix'] . "</span><span class='price-symbol'>$</span></td>";
            echo "        </tr>";
        }
        echo "    </tbody>";
        echo "</table>";
    } else {
        echo "Aucune donnée de Menu Petits Héros (12 ans et moins) disponible.";
    }
    echo "</section>";
    echo "<section id='salades'>";
    echo '<h2>Salades </h2>';
    // Afficher les salades
    if ($saladesData !== null) {
        echo "<table>";
        echo " <tbody>";
        while ($row = $saladesData->fetch(PDO::FETCH_ASSOC)) {
            echo " <tr>";
            echo " <td>" . $row['nom'] . "</td>";
            echo " <td>" . $row['description'] . "</td>";
            echo " <td>" . $row['nomformats'] . "</td>";
            echo "      <td class='price'><span class='price-value'>" . $row['prix'] . "</span><span class='price-symbol'>$</span></td>";
            echo " </tr>";
        }
        echo " </tbody>";
        echo "</table>";
    } else {
        echo "Aucune donnée de salades disponible.";
    }
    echo "</section>";
    echo "<section id='hamburger'>";
    echo '<h2> hamburgers </h2>';
    // Afficher les hamburgers
    if ($hamburgerData !== null) {
        echo "<table>";
        echo " <tbody>";
        while ($row = $hamburgerData->fetch(PDO::FETCH_ASSOC)) {
            echo " <tr>";
            echo " <td>" . $row['nom'] . "</td>";
            echo " <td>" . $row['description'] . "</td>";
            echo "      <td class='price'><span class='price-value'>" . $row['prix'] . "</span><span class='price-symbol'>$</span></td>";
            echo " </tr>";
        }
        echo " </tbody>";
        echo "</table>";
    } else {
        echo "Aucune donnée de hamburgers disponible.";
    }
    echo " <div id='accompagnementshamburger'>";
    // Afficher les accompagnements à hamburger
    if ($accompagnementhamburgerData !== null) {
        echo "<table>";
        echo " <tbody>";
        while ($row = $accompagnementhamburgerData->fetch(PDO::FETCH_ASSOC)) {
            echo " <tr>";
            echo " <td>" . $row['nom'] . "</td>";
            echo "      <td class='price'><span class='price-value'>" . $row['prix'] . "</span><span class='price-symbol'>$</span></td>";
            echo " </tr>";
        }
        echo " </tbody>";
        echo "</table>";
    } else {
        echo "Aucune donnée d'accompagnements à hamburger disponible.";
    }
    echo '</div>';
    echo "</section>";
    echo "<section id='mayos'>";
    echo '<h2> Nos mayos </h2>';
    // Afficher les Nos mayos
    if ($mayosData !== null) {
        echo "<table>";
        echo " <tbody>";
        while ($row = $mayosData->fetch(PDO::FETCH_ASSOC)) {
            echo " <tr>";
            echo " <td>" . $row['nom'] . "</td>";
            echo "      <td class='price'><span class='price-value'>" . $row['prix'] . "</span><span class='price-symbol'>$</span></td>";
            echo " </tr>";
        }
        echo " </tbody>";
        echo "</table>";
    } else {
        echo "Aucune donnée de Nos mayos disponible.";
    }
    echo "</section>";

    // Libérer la mémoire utilisée par les requêtes
    $poutineData = null;
    $extraData = null;
    $acotesData = null;
    $aperitifsData = null;
    $breuvageData = null;
    $superdogsData = null;
    $xmenData = null;
    $spaghettiData = null;
    $menuenfantData = null;
    $saladesData = null;
    $hamburgerData = null;
    $accompagnementhamburgerData = null;
    $mayosData = null;
    $conn = null;
    ?>

</main>
<?php include_once "partials/footer.php"; ?>