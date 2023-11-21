<?php

    $server = "localhost";
    $database = "pzi";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server,$username,$password,$database);
    $query = "SELECT * FROM mobiteli";
    $res = mysqli_query($conn,$query );
    while($row = mysqli_fetch_array($res)){
        echo $row['naziv'];
    }
    mysqli_close($conn);
?>