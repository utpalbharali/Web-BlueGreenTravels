

<?php 

    $db_host = "localhost";
    $db_user = "utpal";
    $db_pass = "utpal@bluegreen";
    $db_name = "bluegreenDatabase";

    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

    //check connection 
    if(!$mysqli){
        die("Error: could not connect to the DB " . $mysqli->connect_error);
    }

?>