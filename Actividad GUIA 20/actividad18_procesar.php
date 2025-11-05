<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Claves - Actividad 18</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components.css">
</head>

<body>
    <div class="container">
        <a href="actividad18.php" class="back-button">← Volver al Formulario</a>

        <div class="header">
            <h1>Resultado de Validación</h1>
            <p>Verificación de Claves de Usuario</p>
        </div>

        <?php
        // Función para validar si las claves son diferentes
        function validarClaves($clave1, $clave2)
        {
            if ($clave1 !== $clave2) {
                echo "<div class='error-message'>";
                echo "<h3>❌ Error: Las claves no coinciden</h3>";
                echo "<p>Las dos claves ingresadas son diferentes. Por favor, verifique e intente nuevamente.</p>";
                echo "</div>";

                echo "<div class='analysis-box'>";
                echo "<h3>⚠️ Detalles del Error</h3>";
                echo "<ul style='list-style: none; padding: 0;'>";
                echo "<li style='padding: 8px 0;'>✗ Primera clave: <code style='background: rgba(255,68,68,0.2); padding: 5px 10px; border-radius: 5px;'>" . str_repeat("*", strlen($clave1)) . "</code> (" . strlen($clave1) . " caracteres)</li>";
                echo "<li style='padding: 8px 0;'>✗ Segunda clave: <code style='background: rgba(255,68,68,0.2); padding: 5px 10px; border-radius: 5px;'>" . str_repeat("*", strlen($clave2)) . "</code> (" . strlen($clave2) . " caracteres)</li>";
                echo "</ul>";
                echo "<p style='margin-top: 15px;'><strong>Sugerencia:</strong> Asegúrese de escribir exactamente la misma clave en ambos campos, prestando atención a mayúsculas y minúsculas.</p>";
                echo "</div>";

                return false;
            } else {
                echo "<div class='success-message'>";
                echo "<h2>✓ Claves Validadas Correctamente</h2>";
                echo "<p>Las dos claves ingresadas coinciden perfectamente</p>";
                echo "</div>";

                return true;
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = htmlspecialchars($_POST['usuario']);
            $clave1 = $_POST['clave1'];
            $clave2 = $_POST['clave2'];

            echo "<div class='result-container'>";
            echo "<h3 style='color: var(--color-primary); margin-bottom: 20px;'>👤 Datos del Usuario</h3>";
            echo "<div class='result-item'>";
            echo "<strong>Nombre de usuario:</strong> <span style='font-size: 1.2em;'>$usuario</span>";
            echo "</div>";
            echo "</div>";

            // Llamar a la función de validación
            $resultado = validarClaves($clave1, $clave2);

            if ($resultado) {
                echo "<div class='result-container'>";
                echo "<h3 style='color: var(--color-primary); margin-bottom: 15px;'>🔐 Información de la Clave</h3>";
                echo "<div class='result-item'>";
                echo "<strong>Longitud de la clave:</strong> <span>" . strlen($clave1) . " caracteres</span>";
                echo "</div>";
                echo "<div class='result-item'>";
                echo "<strong>Clave (oculta):</strong> <span style='font-family: var(--font-mono); letter-spacing: 2px;'>" . str_repeat("●", strlen($clave1)) . "</span>";
                echo "</div>";
                echo "</div>";

                echo "<div class='info-section'>";
                echo "<h3>✅ Registro Exitoso</h3>";
                echo "<p>El usuario <strong>$usuario</strong> ha sido validado correctamente. Las claves coinciden y son seguras.</p>";
                echo "</div>";
            }

        } else {
            echo "<div class='error-message'>";
            echo "<h3>❌ Error</h3>";
            echo "<p>Acceso no válido. Por favor complete el formulario.</p>";
            echo "</div>";
        }
        ?>

        <div class="analysis-box">
            <h3>💡 Función Utilizada</h3>
            <pre
                style='background: var(--bg-dark); padding: 15px; border-radius: var(--radius-md); color: var(--color-success); font-family: var(--font-mono); overflow-x: auto; margin-top: 10px;'>
function validarClaves($clave1, $clave2) {
    if ($clave1 !== $clave2) {
        // Las claves son diferentes
        return false;
    } else {
        // Las claves coinciden
        return true;
    }
}
            </pre>
            <p style="margin-top: 15px;">Esta función compara las dos claves recibidas como
                parámetros y retorna <code>true</code> si son iguales o <code>false</code> si son
                diferentes.</p>
        </div>
    </div>
</body>

</html>