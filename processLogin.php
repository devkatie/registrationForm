<?php

    require_once('connection.php');
    
    if(isset($_POST['login'])) {
    
        $Username = mysqli_real_escape_string($con, $_POST['Username']);
        $Password = mysqli_real_escape_string($con, $_POST['Password']);

        if(empty($Username) || empty($Password)) {

            echo 'Please fill in all the fields to continue';

        } else {

            echo 'You have been logged in! <br>';

        }
        
    }

?>