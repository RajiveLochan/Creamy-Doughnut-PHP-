<?php
session_start();
//we are destroying the session when the user logs out
if(isset($_GET['username'])) {
    if($_GET['username'] === $_SESSION['username']) {
        unset($_SESSION['username']);
        session_destroy();
        //checking if the session is destroyed
        if(isset($_SESSION['username'])) {
            echo '2'; //logout unsuccessful
        } else {
            echo '1'; //successfully logged out, session destroyed
        }
        //check if the cookie is there, and delete it
        if(isset($_COOKIE['rememberMe'])) {
            //if the cookie exists, expire it by setting the time to be back by 1 hour
            setcookie('rememberMe', '', time() - 3600);
        }
    } else {
        echo '-1';
    }
    die(); //this is to ensure that it does not execute the statements after this
}

if(empty($_SESSION['username'])) {
    echo '0';
} else {
    echo $_SESSION['username'];
}
?>