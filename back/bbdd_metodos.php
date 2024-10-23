<?php

 function error_ddbb () {
    $e = "<101>";
    echo "Error al conectar a la base de datos.
    error> " . $e . " <br>";

}

function query1 () {
    $a = "SELECT * FROM USERS";
    return $a;
}




?>