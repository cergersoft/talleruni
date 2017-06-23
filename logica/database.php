<?php

$server = "localhost";
$user = "root";
$pass = "123";
$db = "pruebataller";

// conexion

$conexion = mysqli_connect($server, $user, $pass, $db);

    if(!$conexion){
        
        echo "error en la conexion - revise su conexion";
        
    } else {
        
        echo "conexion exitosa";
    }


?>