<?php
    $host = "styledcode.postgres.database.azure.com";
    $port = "5432";
    $database = "postgres";
    $user = "pms131@styledcode";
    $pw = "a12345678!";
    
    $con = pg_connect("host=$host port=$port dbname=$database user=$user password=$pw") or die ("Could not connect to server\n"); 

    session_start();
    $roomname = $_POST['roomname'];
    $roomsubject = $_POST['roomsubject'];
    $admin = $_SESSION['email'];

    $query = "INSERT INTO rooms (roomname, roomsubject, roomadmin) VALUES ('$roomname', '$roomsubject', '$admin')";

    $result = pg_query($con, $query);

    if($result)
    {
        echo "<script>
        window.location.replace('lobby.html');
        </script>";
    }
    else {
        echo 'failure';
    }
    
    pg_close($con);
?>