<?php
require_once "sections/header.php";
?>

<section class="login-section">
    <form action="admin/login.php" method="POST" class="login-form">
        <p class="login-title">Sign in</p>
       <!--  <p class="login-title"><?php echo $_SESSION['username'] ?></p> -->
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="password" id="password" placeholder="Password">
        <?php if( isset($_SESSION['error']) ) {
            echo "<p class='alert'>$_SESSION[error]</p>";
        }
            ?> 
        <button class="sign-in-btn">Sign in</button>
    </form>
</section>

<?php  require_once "sections/footer.php"; ?>
