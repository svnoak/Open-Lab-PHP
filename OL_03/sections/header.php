<?php
$link = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Filmer</title>
</head>
<body>
<nav>
    <ul>
        <li id="nav-home" class="nav-item <?php if($link == "/index.php"){ ?> active <?php }?> ">
            <a href="/index.php">HOME</a>
        </li>
        <li id="nav-movies" class="nav-item <?php if($link == "/pages/movies.php"){ ?> active <?php }?> ">
            <a href="/pages/movies.php">FILMER</a>
        </li>
        <li id="nav-profile" class="nav-item <?php if($link == "/pages/profile.php"){ ?> active <?php }?> ">
            <a href="/pages/profile.php">PROFIL</a>
        </li>
        <li id="nav-logout" class="nav-item">
            <a href="/admin/logout.php">LOGOUT</a>
        </li>
        <div id="selector"></div>
    </ul>
</nav>
