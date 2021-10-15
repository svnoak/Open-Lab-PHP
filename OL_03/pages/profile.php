<?php
include "../sections/header.php";
require_once "../config.php";

var_dump( $_SESSION['isLoggedIn'] );

if( isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] ){
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
?>

<section class="profile">
    <p><span><?php echo $username ?></span></p>
</section>


<?php 
}else{
    session_destroy();
    header("location: /index.php");
    exit();
} 


?>

<?php require_once "../sections/footer.php"; ?>