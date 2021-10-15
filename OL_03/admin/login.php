<?php
require_once "../config.php";
session_start();

if( isset($_POST) ){

    $email = $_POST['email'];
    $pwd = $_POST['password'];

    if( str_contains($email, "@") ){

        foreach($users as $user ){
            if( $user['email'] === $email ){
                if( $user['password'] === $pwd ){
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['isLoggedIn'] = true;
                    header("location: /pages/profile.php");
                    exit();
                } else{
                    $_SESSION['error'] = "Fel användarnamn eller lösenord";
                    $_SESSION['isLoggedIn'] = false;
                    header("location: /index.php");
                    exit();
                }
            } else{
                $_SESSION['error'] = "Fel användarnamn eller lösenord";
                $_SESSION['isLoggedIn'] = false;
                header("location: /index.php");
                exit();
            }
        }
    } else {
        $_SESSION['error'] = "Du måste ange en giltig mejladdress";
        $_SESSION['isLoggedIn'] = false;
        header("location: index.php");
        exit();
    }
}
?>
