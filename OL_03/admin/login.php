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
                    header("location: /pages/profile.php");
                    exit();
                } else{
                    $_SESSION['error'] = "Error 1";
                    header("location: /index.php");
                    exit();
                }
            } else{
                $_SESSION['error'] = "Error 1";
                header("location: /index.php");
                exit();
            }
        }
    } else {
        $_SESSION['error'] = "Error 2";
        header("location: index.php");
        exit();
    }
}
?>
