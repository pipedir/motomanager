<?php

require("bbdd_metodos.php");
require("conexion_data.php");


$conexion = mysqli_connect($db_host,$db_user,$db_password, $db_name) or die("No se encuentra la base de datos");


if(mysqli_connect_errno()){
    echo "".mysqli_connect_error()."";
    error_ddbb();
}

// seleccion base de datos

mysqli_select_db($conexion, $db_name);
mysqli_set_charset($conexion,"utf8");

$query = query1();
$output = mysqli_query($conexion,"$query");







?>