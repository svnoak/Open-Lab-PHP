<?php
include "../sections/header.php";
require_once "../config.php";

function renderMovie($movie){
    $html = "";
    $html .= "<h1 class='movie-title'>$movie[name]</h1>";
    $html .= "<image src='/images/$movie[image]' class='movie-image'>";
    $html .= "<p class='release'>Release: $movie[release]</p>";
    $html .= "<p class='description'>$movie[description]</p>";

    return $html;
}
?>

<section class="movies-list">
    <?php foreach( $movies as $movie ){
        echo "<div class='movie-box'>".renderMovie($movie)."</div>";
    } ?>
</section>


<?php require_once "../sections/footer.php"; ?>
