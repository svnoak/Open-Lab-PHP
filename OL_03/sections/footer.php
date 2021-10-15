<?php
// Här placerar ni sidfoten samt avlutande <body> och <html> taggar.
// Tänk på att i sidfoten visas användarnamnet om personen är inloggad.
// Samt det nuvarande året.
?>

<footer><span>&#169;</span>2021  <?php if(isset($_SESSION['username'])){ echo "| Inloggad som: $_SESSION[username]"; } ?></footer>
</body>
</html>