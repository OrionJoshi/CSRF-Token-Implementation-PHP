<?php
    
    function get_connection(){
        $connection = mysqli_connect('localhost','root','','csrf');

        if(!$connection){
            die('Failed to connect db');
        }

        return $connection;
    }

    function authenticate($email, $password){

        $connection = get_connection();

        $sql = "SELECT * FROM users WHERE email = ?";
        $statment = mysqli_prepare($connection, $sql);

        if(is_object($statment)) {

            mysqli_stmt_bind_param($statment, 's', $email);
            mysqli_stmt_bind_result($statment, $db_user_id, $db_user_email, $db_user_password);
            mysqli_stmt_execute($statment);
            mysqli_stmt_fetch($statment);

            if(mysqli_stmt_num_rows($statment)){

                if(password_verify($password, $db_user_password)){
                    return ['loggedin' => true, 'email' => $db_user_email];
                }
                return false;
            }   

            return false;

        }else{
            echo 'Failed to create statment';
        }

    }

    function debug($arg){
        echo '<pre>';
        print_r($arg);
        echo '</pre>';
        exit();
    }

    function base_url(){
        return 'http://localhost/CSRF-Token-Implementation-PHP/';
    }

?>