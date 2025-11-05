<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Pedido - Actividad 15</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components.css">
</head>

<body>
    <div class="container">
        <a href="actividad15.php" class="back-button">← Hacer Otro Pedido</a>

        <div class="header">
            <h1>🍕 Pedido Confirmado</h1>
            <p>Su pedido ha sido registrado exitosamente</p>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST['nombre']);
            $direccion = htmlspecialchars($_POST['direccion']);

            $jamon_queso = isset($_POST['jamon_queso']) ? true : false;
            $cantidad_jamon_queso = intval($_POST['cantidad_jamon_queso']);

            $napolitana = isset($_POST['napolitana']) ? true : false;
            $cantidad_napolitana = intval($_POST['cantidad_napolitana']);

            $muzzarella = isset($_POST['muzzarella']) ? true : false;
            $cantidad_muzzarella = intval($_POST['cantidad_muzzarella']);

            // Crear el contenido del pedido
            $pedido = "==========================================\n";
            $pedido .= "NUEVO PEDIDO DE PIZZA\n";
            $pedido .= "Fecha: " . date("d/m/Y H:i:s") . "\n";
            $pedido .= "==========================================\n";
            $pedido .= "Nombre: $nombre\n";
            $pedido .= "Dirección: $direccion\n";
            $pedido .= "------------------------------------------\n";
            $pedido .= "PIZZAS SOLICITADAS:\n";

            $total_pizzas = 0;

            if ($jamon_queso && $cantidad_jamon_queso > 0) {
                $pedido .= "- Jamón y Queso: $cantidad_jamon_queso unidad(es)\n";
                $total_pizzas += $cantidad_jamon_queso;
            }

            if ($napolitana && $cantidad_napolitana > 0) {
                $pedido .= "- Napolitana: $cantidad_napolitana unidad(es)\n";
                $total_pizzas += $cantidad_napolitana;
            }

            if ($muzzarella && $cantidad_muzzarella > 0) {
                $pedido .= "- Muzzarella: $cantidad_muzzarella unidad(es)\n";
                $total_pizzas += $cantidad_muzzarella;
            }

            $pedido .= "------------------------------------------\n";
            $pedido .= "Total de pizzas: $total_pizzas\n";
            $pedido .= "==========================================\n\n";

            // Guardar en el archivo pedidos.txt
            $archivo = fopen("pedidos.txt", "a") or die("No se puede abrir el archivo");
            fwrite($archivo, $pedido);
            fclose($archivo);

            echo "<div class='success-message'>";
            echo "<h2>✓ Pedido Registrado Exitosamente</h2>";
            echo "<p>Su pedido ha sido guardado en nuestro sistema</p>";
            echo "</div>";

            echo "<div class='result-container'>";
            echo "<h3 style='color: var(--color-primary); margin-bottom: 20px;'>📋 Resumen del Pedido</h3>";

            echo "<div class='result-item'>";
            echo "<strong>👤 Nombre:</strong> <span>$nombre</span>";
            echo "</div>";

            echo "<div class='result-item'>";
            echo "<strong>📍 Dirección de entrega:</strong> <span>$direccion</span>";
            echo "</div>";

            echo "<div class='result-item'>";
            echo "<strong>🕐 Hora del pedido:</strong> <span>" . date("d/m/Y H:i:s") . "</span>";
            echo "</div>";

            echo "<h4 style='color: var(--color-primary); margin: 20px 0;'>Pizzas Ordenadas:</h4>";

            if ($jamon_queso && $cantidad_jamon_queso > 0) {
                echo "<div class='result-item'>";
                echo "<strong>🧀 Jamón y Queso:</strong> <span>$cantidad_jamon_queso unidad(es)</span>";
                echo "</div>";
            }

            if ($napolitana && $cantidad_napolitana > 0) {
                echo "<div class='result-item'>";
                echo "<strong>🍅 Napolitana:</strong> <span>$cantidad_napolitana unidad(es)</span>";
                echo "</div>";
            }

            if ($muzzarella && $cantidad_muzzarella > 0) {
                echo "<div class='result-item'>";
                echo "<strong>🧈 Muzzarella:</strong> <span>$cantidad_muzzarella unidad(es)</span>";
                echo "</div>";
            }

            echo "<div class='result-item' style='background: var(--color-primary); color: var(--bg-dark);'>";
            echo "<strong>📦 Total de pizzas:</strong> <span style='font-size: 1.5em;'>$total_pizzas</span>";
            echo "</div>";

            echo "</div>";

            echo "<div class='info-section'>";
            echo "<h3>⏰ Tiempo estimado de entrega</h3>";
            echo "<p style='font-size: 1.2em; text-align: center; color: var(--color-primary); font-weight: bold;'>30 - 45 minutos</p>";
            echo "</div>";

            echo "<div class='analysis-box' style='text-align: center;'>";
            echo "<h3>¡Gracias por su preferencia!</h3>";
            echo "<p>Su pedido está siendo preparado con los mejores ingredientes</p>";
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