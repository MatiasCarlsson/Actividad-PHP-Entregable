<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 16 - Lectura de Archivo</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-button">← Volver al Menú</a>

        <div class="header">
            <h1>📄 Actividad 16</h1>
            <p>Lectura de Archivo de Pedidos</p>
        </div>

        <?php
        $archivo_nombre = "pedidos.txt";

        if (file_exists($archivo_nombre)) {
            $contenido = file_get_contents($archivo_nombre);

            if (!empty($contenido)) {
                echo "<div class='success-message'>";
                echo "<h2>✓ Archivo de Pedidos Cargado</h2>";
                echo "<p>Se encontraron los siguientes pedidos registrados</p>";
                echo "</div>";

                echo "<div class='result-container' style='background: var(--bg-dark); border: 2px solid var(--color-primary); padding: 25px;'>";
                echo "<h3 style='color: var(--color-primary); margin-bottom: 20px;'>📋 Historial de Pedidos</h3>";
                echo "<pre style='background: #000; padding: 20px; border-radius: var(--radius-md); color: var(--color-success); font-family: var(--font-mono); overflow-x: auto; line-height: 1.8; white-space: pre-wrap; word-wrap: break-word;'>";
                echo htmlspecialchars($contenido);
                echo "</pre>";
                echo "</div>";

                // Contar pedidos (cada pedido está separado por líneas de =)
                $num_pedidos = substr_count($contenido, "NUEVO PEDIDO DE PIZZA");

                echo "<div class='info-section'>";
                echo "<h3>📊 Estadísticas</h3>";
                echo "<div class='result-item'>";
                echo "<strong>Total de pedidos registrados:</strong> <span style='font-size: 1.5em; color: var(--color-primary);'>$num_pedidos</span>";
                echo "</div>";
                echo "</div>";

            } else {
                echo "<div class='analysis-box'>";
                echo "<h3>ℹ️ Archivo Vacío</h3>";
                echo "<p>El archivo <strong>$archivo_nombre</strong> existe pero no contiene pedidos registrados.</p>";
                echo "<p>Realice un pedido en la <a href='actividad15.php' style='color: var(--color-primary);'>Actividad 15</a> para ver los registros aquí.</p>";
                echo "</div>";
            }

        } else {
            echo "<div class='error-message'>";
            echo "<h3>❌ Archivo No Encontrado</h3>";
            echo "<p>El archivo <strong>$archivo_nombre</strong> no existe.</p>";
            echo "</div>";

            echo "<div class='info-section'>";
            echo "<h3>ℹ️ Instrucciones</h3>";
            echo "<ul>";
            echo "<li>El archivo se creará automáticamente cuando realice su primer pedido</li>";
            echo "<li>Vaya a la <a href='actividad15.php' style='color: var(--color-primary); font-weight: bold;'>Actividad 15 - Pedido de Pizzas</a></li>";
            echo "<li>Complete y envíe el formulario de pedido</li>";
            echo "<li>Luego regrese aquí para ver los pedidos registrados</li>";
            echo "</ul>";
            echo "</div>";
        }
        ?>

        <div class="analysis-box">
            <h3>💡 Funciones PHP Utilizadas</h3>
            <ul style="list-style: none; padding: 0;">
                <li style="padding: 8px 0;"><strong>file_exists():</strong> Verifica si el archivo
                    existe</li>
                <li style="padding: 8px 0;"><strong>file_get_contents():</strong> Lee todo el
                    contenido del archivo</li>
                <li style="padding: 8px 0;"><strong>substr_count():</strong> Cuenta ocurrencias de
                    una cadena</li>
                <li style="padding: 8px 0;"><strong>htmlspecialchars():</strong> Convierte
                    caracteres especiales a HTML</li>
            </ul>
        </div>
    </div>
</body>

</html>