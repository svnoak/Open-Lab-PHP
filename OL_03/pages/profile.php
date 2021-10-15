<?php
include "../sections/header.php";
require_once "../config.php";

/* if( !isset($_SESSION['isLoggedIn']) ){
    header("location: /index.php");
    exit();
} */

    $username = "Kim";
    $email = "kim@email.com"
?>

<section class="profile">
    <p><span><?php $username ?></span></p>
</section>

<?php require_once "../sections/footer.php"; ?>