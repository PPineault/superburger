<?php
$pageTitle = ' Super Burger Information';
$metades = 'Super Buger page information';
include_once "partials/header.php";
?>


<main id="info">




    <section id="description">
        <h2> <strong> À Propos </strong> </h2>
        <?php
        $json_data = file_get_contents("./json/description.json");
        $data = json_decode($json_data);
        echo $data[0]->description;
        ?>

    </section>

    <!-- nous rejoindre -->
    <section id="rejoindre">

        <h2> <strong> Nous rejoindre </strong> </h2>

        <?php
        $json_data = file_get_contents("./json/rejoindre.json");
        $data = json_decode($json_data, true);
        foreach ($data as $item) {
            echo "Courriel: " . $item['courriel'] . "<br>";
            echo "Facebook: " . $item['Facebook'] . "<br>";
            echo "Instagram: " . $item['Instagram'] . "<br>";
            echo "Téléphone: " . $item['téléphone'] . "<br>";
            echo "Adresse: " . $item['Adresse'] . "<br>";
        }

        ?>
    </section>


    <!-- map -->
    <section>

        <h2> La Map</h2>

        <div id="map"> </div>



    </section>

    <!-- horaire-->

    <section id="horaire">


        <h2>L'HORAIRE </h2>


        <?php

        $json_data = file_get_contents("./json/horaire.json");
        $data = json_decode($json_data);

        $htmlTable = '<table>';
        $htmlTable .= "<tr>
            <td> Jours </td>
            <td> Heures </td>
        </tr>";
        foreach ($data as $row) {
            $htmlTable .= '<tr>';
            foreach ($row as $cell) {
                $htmlTable .= '<td>' . $cell . '</td>';
            }
            $htmlTable .= '</tr>';
        }
        $htmlTable .= '</table>';
        echo $htmlTable;






        ?>


    </section>





</main>
<?php include_once "partials/footer.php"; ?>