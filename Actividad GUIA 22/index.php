<?php
include("conexionDB.php");
$conexionDB = conexionDB();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 22 - Base de Datos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Actividad 22</h1>
            <p>Conexión a Base de Datos MySQL</p>
        </div>

        <?php
        echo "<div style='width: 100%; justify-content: center; display: flex;'><div class='connection-status success'>✓ Conexión exitosa a la base de datos.</div></div>";

        $sqlQuery = "SELECT * FROM usuario";
        $resultado = mysqli_query($conexionDB, $sqlQuery);

        if ($resultado) {
            $numRegistros = mysqli_num_rows($resultado);
            echo "<div class='db-table-container'>";

            if ($numRegistros > 0) {
                echo "<div class='table-responsive'>";
                echo "<table class='data-table'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Edad</th>
                                <th>Apellido</th>
                            </tr>
                        </thead>
                        <tbody>";

                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>
                            <td class='highlight'>" . htmlspecialchars($fila['id']) . "</td>
                            <td>" . htmlspecialchars($fila['nombre']) . "</td>
                            <td>" . htmlspecialchars($fila['edad']) . "</td>
                            <td>" . htmlspecialchars($fila['apellido']) . "</td>
                        </tr>";
                }

                echo "</tbody></table></div>";
                echo "<div class='table-footer'>Total de registros: $numRegistros</div>";
            } else {
                echo "<div class='empty-state'>
                        <div class='icon'>📭</div>
                        <h3>No hay usuarios registrados</h3>
                        <p>La tabla está vacía</p>
                    </div>";
            }

            echo "</div>";
            mysqli_free_result($resultado);
        } else {
            echo "<div class='error-message'>
                    <h3>❌ Error en la consulta</h3>
                    <p>" . htmlspecialchars(mysqli_error($conexionDB)) . "</p>
                </div>";
        }

        desconectarDB($conexionDB);
        ?>
    </div>
</body>

</html>