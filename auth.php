<?php 


    require_once './includes/functions.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password  = $_POST['password'];

        if(empty($_POST['token'])){

            header('Location:index.php?status=error$message=CSRF token missing');
        }
        elseif($_POST['token'] != $_SESSION['token']){

            header('Location:index.php?status=error$message=CSRF token missing');

        }else{

            //Authentication
            $authenticated = authenticate($email, $password);

            if( is_array($authenticated) AND !empty($authenticated)){
                $_SESSION['user'] = $authenticated;
                header('Location: profile.php');
            }else{
                header('Location:index.php?status=error$message=Authentication Failed!');
            }
        }

        
    }else{
        header('Location:index.php?status=error$message=Please login to your account');

    }

?>