<nav>
    <ul>
        <li>
            <a href="/index.php">Home</a>
        </li>
        <li>
            <a href="/about.php">About</a>
        </li>
        <?php if($_SERVER['REQUEST_URI'] !== "/dogs.php") : ?>
        <li>
            <a href="/dogs.php">Dogs</a>
        </li>
        <?php else : ?>
            <li class="dropdown">
                <a class="dropbtn" href="/dogs.php">Dogs</a>
                <div class="dropdown-content">
                    <a href="../dogs.php" action="dogs.php" name="dog" method="GET">Collie</a>
                    <a href="../dogs.php" action="dogs.php" name="dog" method="GET">Shiba</a>
                    <a href="../dogs.php" action="dogs.php" name="dog" method="GET">Tax</a>
                </div>
            </li>
        <?php endif; ?>
    </ul>
</nav>