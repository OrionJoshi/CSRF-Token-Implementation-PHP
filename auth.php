<?php 

    session_start();

    require_once './includes/functions.php';

    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($_POST['email']);
        $password  = mysqli_real_escape_string($_POST['password']);

        //Authentication
        $authenticated = authenticate($email, $password);
    }

?>