<?php
include "../sections/header.php";
require_once "../config.php";

if( isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] ){
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
?>

<section class="profile-section">
    <div class="profile-box">
        <p><span>Användarnamn: </span><?php echo $username ?></p>
        <p><span>Mejl: </span><?php echo $email ?></p>
    </div>
</section>


<?php 
}else{
    session_destroy();
    header("location: /index.php");
    exit();
} 


?>

<?php require_once "../sections/footer.php"; ?>