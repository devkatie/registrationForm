<?php

    require_once('connection.php');
    
    if(isset($_POST['btn-save'])) {
    
        $Username = mysqli_real_escape_string($con, $_POST['Username']);
        $Email = mysqli_real_escape_string($con, $_POST['Email']);
        $Password = mysqli_real_escape_string($con, $_POST['Password']);
        $CPassword = mysqli_real_escape_string($con, $_POST['CPass']);

        if(empty($Username) || empty($Email) || empty($Password) || empty($CPassword)) {

            echo 'Please fill in all the fields to continue';

        } else if($Password != $CPassword) {

            echo 'Passwords do not match! Please retry...';

        } else {

            $Pass = md5($Password);
            $sql = "insert into users (Username, Email, Password) values ('$Username', '$Email', '$Pass')";
            $result = mysqli_query($con, $sql);

            if($result) {

                echo 'Your account has been saved successfully in the database!';

            } else {

                echo 'Please check your query';

            }

        }
        
    }

?>