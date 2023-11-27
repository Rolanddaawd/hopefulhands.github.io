<?php

    if (isset($_POST["submit"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $event = $_POST["event"];

        if(!empty($fname) && !empty($lname) && !empty($email) && !empty($event)){
                $link mysqli_connect ("localhost", "root", "volunteer");
                if($link==false){
                    die(mysqli_connect_error());
                }

                $sql = "INSERT INTO users (fname, lname, email, event) VALUES ('$fname', '$lname' , '$email', $event')";

                if (mysqli_query($link,$sql)) {
                    echo "Recorded Succefully"
                }else{
                    echo "Something went wrong"
                }
        }else {
            echo "Please provide all the information"
        }
    }

?>