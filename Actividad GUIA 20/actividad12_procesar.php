<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Actividad 12</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components.css">
</head>

<body>
    <div class="container">
        <a href="actividad12.php" class="back-button">← Volver al Formulario</a>

        <div class="header">
            <h1>Resultado del Análisis</h1>
            <p>Consulta de Impuestos a las Ganancias</p>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST['nombre']);
            $ingresos = $_POST['ingresos'];

            echo "<div class='result-container'>";
            echo "<div class='result-item'>";
            echo "<strong>Nombre:</strong> <span>$nombre</span>";
            echo "</div>";
            echo "<div class='result-item'>";
            echo "<strong>Rango de ingresos:</strong> <span>$$ingresos</span>";
            echo "</div>";
            echo "</div>";

            if ($ingresos == ">3000") {
                echo "<div class='analysis-box'>";
                echo "<h3>⚠️ Debe pagar impuestos</h3>";
                echo "<p>De acuerdo a sus ingresos mensuales (mayor a $3000), <strong>$nombre</strong> debe pagar impuestos a las ganancias según la normativa vigente.</p>";
                echo "</div>";
            } else {
                echo "<div class='success-message'>";
                echo "<h2>✓ No debe pagar impuestos</h2>";
                echo "<p>Sus ingresos mensuales están por debajo del mínimo imponible. No debe pagar impuestos a las ganancias.</p>";
                echo "</div>";
            }
        } else {
            echo "<div class='error-message'>";
            echo "<h3>❌ Error</h3>";
            echo "<p>Acceso no válido. Por favor complete el formulario.</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>