<?php

$a = $_GET["get"];

// datos de  conexion
$ddbb_name="motomanager"; $ddbb_user="root"; $dbb="localhost"; $ddbb_pass="";

//


// conexion por medio de metodos

$conexion=mysqli_connect($dbb,$ddbb_user,$ddbb_pass,$ddbb_name);

if(mysqli_connect_errno()){
    echo "Se producjo un error al conectar la base de datos";
    exit();
}

// seleccion de dbb y caracteres

mysqli_select_db($conexion,$ddbb_name);
mysqli_set_charset($conexion,"utf8");


// seccion querys 0.1

    
    $query = "SELECT * FROM users WHERE ID = '$a' ";
    $output =mysqli_query($conexion,$query);

    
while (($filas=mysqli_fetch_array($output, MYSQLI_ASSOC))) {

    echo "<table><tr><td>";


    echo " ".$filas["ID"] ."</td><td>";
    echo " ".$filas["NOMBRE ARTÍCULO"]." </td><td>";
    echo " ".$filas["FECHA"]." </td><td>";
    echo " ".$filas["PRECIO"]." </td><td>";
    echo " ".$filas["PAÍS DE ORIGEN"]."</td><td></tr></table> ";
   
    echo "<br>";
}




function _getVersion(){
    return["|v0.1|","|Debug|"];

}

[$ver,$state] = _getVersion();
echo "La version de la conexion es> " . $ver . 
" <br> Con el estado actual de> " . $state;

mysqli_close($conexion);



?>