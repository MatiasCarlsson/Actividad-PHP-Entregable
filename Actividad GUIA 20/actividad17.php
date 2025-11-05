<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 17 - Vectores Asociativos</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-button">← Volver al Menú</a>

        <div class="header">
            <h1>Actividad 17</h1>
            <p>Vectores Asociativos - Sistema de Usuarios</p>
        </div>

        <div class="result-container">
            <?php
            // Crear vector asociativo con usuarios y claves
            $usuarios = array(
                "admin" => "admin123",
                "juan_perez" => "jp2024",
                "maria_garcia" => "mg5678",
                "carlos_lopez" => "cl9012",
                "ana_martinez" => "am3456"
            );

            echo "<h3 style='color: var(--color-primary); margin-bottom: 20px;'>🔐 Sistema de Control de Acceso</h3>";

            echo "<div class='success-message'>";
            echo "<h2>✓ Usuarios Registrados</h2>";
            echo "<p>Total de usuarios en el sistema: <strong>" . count($usuarios) . "</strong></p>";
            echo "</div>";

            // Mostrar todos los usuarios
            echo "<div style='margin: 20px 0;'>";
            echo "<h4 style='color: var(--color-primary); margin-bottom: 15px;'>👥 Lista de Usuarios y Claves:</h4>";

            foreach ($usuarios as $usuario => $clave) {
                echo "<div class='result-item'>";
                echo "<strong>Usuario:</strong> <span style='color: var(--color-primary);'>$usuario</span>";
                echo " | ";
                echo "<strong>Clave:</strong> <span style='font-family: var(--font-mono);'>$clave</span>";
                echo "</div>";
            }
            echo "</div>";

            // Acceder a un componente específico por nombre
            $usuario_ejemplo = "juan_perez";
            echo "<div class='analysis-box'>";
            echo "<h3>🔍 Acceso a componente específica</h3>";
            echo "<p>Accediendo al usuario: <strong style='color: var(--color-primary);'>$usuario_ejemplo</strong></p>";
            echo "<div class='result-item' style='margin-top: 15px; background: var(--color-primary-light);'>";
            echo "<strong>Clave de $usuario_ejemplo:</strong> <span style='font-size: 1.3em; font-family: var(--font-mono); color: var(--color-primary);'>" . $usuarios[$usuario_ejemplo] . "</span>";
            echo "</div>";
            echo "</div>";
            ?>
        </div>

        <div class="info-section">
            <h3>💡 Conceptos de Vectores Asociativos</h3>
            <ul>
                <li><strong>Clave-Valor:</strong> Los vectores asociativos usan claves
                    personalizadas en lugar de índices numéricos</li>
                <li><strong>Acceso por nombre:</strong> Se accede a los elementos usando
                    <code>$vector["clave"]</code></li>
                <li><strong>foreach:</strong> Permite recorrer tanto claves como valores</li>
                <li><strong>count():</strong> Devuelve la cantidad de elementos en el vector</li>
            </ul>
        </div>

        <div class="result-container" style="background: var(--bg-dark);">
            <h3 style='color: var(--color-primary); margin-bottom: 15px;'>📝 Código Utilizado</h3>
            <pre
                style='background: #000; padding: 20px; border-radius: var(--radius-md); color: var(--color-success); font-family: var(--font-mono); overflow-x: auto; line-height: 1.8;'>
$usuarios = array(
    "admin" => "admin123",
    "juan_perez" => "jp2024",
    "maria_garcia" => "mg5678",
    "carlos_lopez" => "cl9012",
    "ana_martinez" => "am3456"
);

// Acceder a un elemento
echo $usuarios["juan_perez"];  // Resultado: jp2024

// Recorrer el vector
foreach ($usuarios as $usuario => $clave) {
    echo "$usuario: $clave";
}
            </pre>
        </div>
    </div>
</body>

</html>