<?php 
    session_start();
    if(!isset($_SESSION['user']['loggedin'])){
        header('Location: index.php?status=error$message=Please login to your account');
        exit();
    }

?>