<?php
function conexionDB()
{
    $conexionDB = mysqli_connect("localhost", "root", "2103", "actividad22");

    if (mysqli_connect_errno()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    } else {
        $conexionDB->set_charset("utf8");
    }

    return $conexionDB;
}

function desconectarDB($conexcionDB)
{
    mysqli_close($conexcionDB);
}

?>