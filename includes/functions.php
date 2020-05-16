<?php
    
    function get_connection(){
        $connection = mysqli_connect('localhost','root','','csrf');

        if(!$connection){
            die('Failed to connect db');
        }

        return $connection;
    }

    function debug($arg){
        echo '<pre>';
        print_r($arg);
        echo '</pre>';
        exit();
    }

?>