<?php
    
    function get_connection(){
        $connection = mysqli_connect('localhost','root','','csrf');

        if(!$connection){
            die('Failed to connect db');
        }

        return $connection;
    }

?>