<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proyecto-19307027";

   //conexion
    $connect = new mysqli($localhost, $username, $password, $dbname);
    mysqli_set_charset($connect, 'utf8');

    if($connect ->connect_error) {
      die("La conexion fallo: " . $connect ->connect_error);
    } else {

    }

?>