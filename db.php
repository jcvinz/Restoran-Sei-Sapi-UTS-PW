<?php
    $host = "sql102.epizy.com";
    $user = "epiz_30159864";
    $pass = "J1dvJKDSXMZGi";
    $name = "epiz_30159864_restoran_sei_sapi";

    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
    }
?>
