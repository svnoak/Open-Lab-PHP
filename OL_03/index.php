<?php
require_once "sections/header.php";

// Här inkluderar ni allt ni behöver. Glöm inte starta sessionen om ni behöver
// använda er av den.
?>

<section class="login-section">
    <form action="admin/login.php" method="POST" class="login-form">
        <p class="login-title">Sign in</p>
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="password" id="password" placeholder="Password">
        <button class="sign-in-btn">Sign in</button>
    </form>
</section>

<?php  require_once "sections/footer.php"; ?>
