<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato Final - Actividad 13</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components.css">
</head>

<body>
    <div class="container">
        <a href="actividad13.php" class="back-button">← Volver al Formulario</a>

        <div class="header">
            <h1>Contrato Laboral</h1>
            <p>Documento Final Generado</p>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $contrato = htmlspecialchars($_POST['contrato']);

            echo "<div class='success-message'>";
            echo "<h2>✓ Contrato Generado Exitosamente</h2>";
            echo "</div>";

            echo "<div class='result-container' style='background: white; color: #000; padding: 30px; border: 3px solid var(--color-primary); line-height: 2;'>";
            echo "<h3 style='text-align: center; color: var(--color-primary); margin-bottom: 20px;'>CONTRATO DE TRABAJO A PLAZO FIJO</h3>";
            echo "<p style='text-align: justify; font-size: 1.1em;'>$contrato</p>";
            echo "<br><br>";
            echo "<div style='display: flex; justify-content: space-around; margin-top: 50px;'>";
            echo "<div style='text-align: center; border-top: 2px solid #000; padding-top: 10px; width: 200px;'>";
            echo "<strong>Firma Empleador</strong>";
            echo "</div>";
            echo "<div style='text-align: center; border-top: 2px solid #000; padding-top: 10px; width: 200px;'>";
            echo "<strong>Firma Empleado</strong>";
            echo "</div>";
            echo "</div>";
            echo "</div>";

            echo "<div class='info-section' style='margin-top: 20px;'>";
            echo "<h3>📄 Información del Documento</h3>";
            echo "<p>El contrato ha sido generado correctamente con los datos proporcionados. Puede imprimirlo o guardarlo para su registro.</p>";
            echo "</div>";
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