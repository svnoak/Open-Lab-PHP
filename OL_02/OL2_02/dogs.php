<?php include_once "include/header.php"; 

if(isset($_GET['link'])){
    include "dogs/$_GET[link].php";
}
else{
?>

<form class="columns" method="GET" action="dogs.php">
    <button class="box column" name="link" value="collie">
        <h1>Collie</h1>
        <figure class="image is-128x128 media-right">
            <img src="https://www.skk.se/contentassets/a8a1f1f59c204166a922a89320190ef5/1-collie-korthar---296_vv_800px.jpg?w=500&ch=-1&up=False">
        </figure>
</button>
    <button class="box column" name="link" value="shiba">
    <h1>Shiba</h1>
        <figure class="image is-128x128 media-right">
            <img src="https://skk.se/contentassets/440e629dc08649b88b0eab51be79ad82/shiba---257_vv_800px.jpg?w=500&ch=-1&up=False">
        </figure>
</button>
    <button class="box column" name="link" value="tax">
    <h1>Tax</h1>
        <figure class="image is-128x128 media-right">
            <img src="https://skk.se/contentassets/81230dcd2ac1454e8e1b4fe484ac64d2/tax-stravharig_vv_800px.jpg?w=500&ch=-1&up=False">
        </figure>
</button>
</form>

<?php 
}
?>



<?php include_once "include/footer.php"; ?>
