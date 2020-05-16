<?php 

    session_start();

    require_once './includes/functions.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password  = $_POST['password'];

        //Authentication
        $authenticated = authenticate($email, $password);

        if( is_array($authenticated) AND !empty($authenticated)){
            $_SESSION['user'] = $authenticated;
            header('Location: profile.php');
        }else{
            header('Location:index.php?status=error$message=Authentication Failed!');
        }
    }else{
        header('Location:index.php?status=error$message=Please login to your account');

    }

?>