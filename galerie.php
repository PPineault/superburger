<?php
$pageTitle = "Super Burger  Galerie d'image";
$metades = "Super Buger page de galerie d'image";
include_once "partials/header.php";
?>


<main id="galerie">

    <div id="slider-container">
        <div id="slider" class="flex-container">
            <div class="buttons">
                <button id="prevBtn" class="navBtn" title="bouton précédent carrousel d'image"></button>
                <button id="nextBtn" class="navBtn" title="bouton suivant carrousel d'image"></button>
            </div>
            <div class="carousel" id="imageCarousel">
                <?php
                $json_data = file_get_contents("./json/slider.json");
                $images = json_decode($json_data, true);
                if (count($images) != 0) {
                    foreach ($images as $image) {
                ?>
                        <div class="slide">
                            <img src="<?php echo $image['image'] ?>" alt="<?php echo $image['alt'] ?>">
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div id="galerie-img">
        <?php
        $json_data = file_get_contents("./json/image.json");
        $images = json_decode($json_data, true);
        if (count($images) != 0) {
            foreach ($images as $image) {
        ?>
                <img src="<?php echo $image['image'] ?>" alt="images-decoration-galerie">
        <?php
            }
        }
        ?>


    </div>

</main>
<?php include_once "partials/footer.php"; ?>