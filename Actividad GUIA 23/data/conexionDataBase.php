<?php
function conexionDB()
{
    $conexion = mysqli_connect("localhost", "root", "2103", "halloween");
    if (mysqli_connect_errno()) {
        echo "" . mysqli_connect_error();
        exit();
    } else {
        mysqli_set_charset($conexion, "utf8");
    }

    return $conexion;
}

function desconectarDB($conexion)
{
    mysqli_close($conexion);
}

?>