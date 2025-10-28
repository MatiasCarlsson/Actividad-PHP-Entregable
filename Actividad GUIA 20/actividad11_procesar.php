<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados - Actividad 11</title>
    <!-- Sistema de CSS Modular -->
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="stylesheet" href="./css/actividad11.css">
</head>

<body>
    <div class="container">
        <!-- Botón para volver al formulario -->
        <a href="actividad11.php" class="back-button">← Volver al Formulario</a>

        <?php
        /*
         * VERIFICACIÓN DEL MÉTODO POST
         * Asegura que los datos vienen del formulario
         */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            /*
             * RECEPCIÓN DE DATOS
             * $_POST['name'] → String con el nombre
             * $_POST['deportes'] → Array con los deportes seleccionados
             * ?? [] → Operador de fusión de null: si deportes no existe, usa array vacío
             */
            $nombre = htmlspecialchars($_POST['name']);
            $deportes = $_POST['deportes'] ?? [];

            /*
             * count() → Cuenta los elementos de un array
             * Nos dice cuántos deportes seleccionó el usuario
             */
            $cantidadDeportes = count($deportes);

            ?>

            <!-- Mensaje de éxito -->
            <div class="success-message">
                <h2>✅ ¡Datos Recibidos Exitosamente!</h2>
                <p>La información ha sido procesada correctamente</p>
            </div>

            <!-- Encabezado -->
            <div class="header">
                <h1>📊 Resultados</h1>
                <p>Deportes seleccionados en el formulario</p>
            </div>

            <!-- Contenedor de resultados -->
            <div class="result-container">
                <h3 style="color: var(--color-primary); margin-bottom: 20px;">👤 Usuario:</h3>

                <!-- Mostrar nombre -->
                <div class="result-item">
                    <strong>Nombre:</strong>
                    <span><?php echo $nombre; ?></span>
                </div>

                <!-- Mostrar cantidad de deportes -->
                <div class="result-item">
                    <strong>Cantidad de deportes:</strong>
                    <span><?php echo $cantidadDeportes; ?> deporte(s)</span>
                </div>
            </div>

            <?php
            /*
             * VALIDACIÓN: Verificar si seleccionó al menos un deporte
             */
            if ($cantidadDeportes > 0) {
                ?>

                <!-- Mostrar lista de deportes -->
                <div class="analysis-box">
                    <h3>⚽ Deportes que practicas:</h3>
                    <ul style="color: var(--text-primary); font-size: 1.1em; line-height: 2;">
                        <?php
                        /*
                         * FOREACH: Recorrer el array de deportes
                         * $deportes → Array completo ["Fútbol", "Tenis"]
                         * $deporte → Cada elemento individual en cada iteración
                         */
                        foreach ($deportes as $deporte) {
                            // htmlspecialchars() sanitiza para prevenir XSS
                            echo "<li class='result-item'>" . htmlspecialchars($deporte) . "</li>";
                        }
                        ?>
                    </ul>

                    <?php
                    /*
                     * ANÁLISIS CONDICIONAL basado en la cantidad
                     */
                    echo "<p style='margin-top: 20px; padding-top: 20px; border-top: 2px solid rgba(255, 193, 7, 0.3);'>";

                    if ($cantidadDeportes == 1) {
                        echo "🎯 Practicas 1 deporte. ¡Enfócate y mejora tus habilidades!";
                    } elseif ($cantidadDeportes >= 2 && $cantidadDeportes <= 3) {
                        echo "💪 Practicas $cantidadDeportes deportes. ¡Excelente variedad!";
                    } else {
                        echo "🏆 Practicas $cantidadDeportes deportes. ¡Eres muy activo!";
                    }

                    echo "</p>";
                    ?>
                </div>

                <?php
            } else {
                /*
                 * CASO: No seleccionó ningún deporte
                 */
                ?>

                <div class="analysis-box" style="border-color: #ff9800;">
                    <h3 style="color: #ff9800;">⚠️ Sin deportes seleccionados</h3>
                    <p>No seleccionaste ningún deporte. ¡Te recomendamos practicar alguna actividad física!
                    </p>
                </div>

                <?php
            }
            ?>

            <!-- Mostrar el array $_POST completo para debugging -->
            <div class="info-section">
                <h3>🛠️ Array $_POST Recibido:</h3>
                <pre
                    style="background: var(--bg-dark); padding: 15px; border-radius: var(--radius-sm); overflow-x: auto;">
                <?php
                /*
                 * print_r() → Muestra la estructura completa del array
                 * Útil para debugging y entender qué datos recibió PHP
                 */
                print_r($_POST);
                ?>
                                </pre>
            </div>

            <!-- Explicación del código -->
            <div class="info-section">
                <h3>💡 Conceptos Clave:</h3>
                <ul>
                    <li><strong>name="deportes[]"</strong> → Los corchetes [] crean un array en PHP</li>
                    <li><strong>$_POST['deportes']</strong> → Recibe un array con todos los checkboxes
                        marcados</li>
                    <li><strong>?? []</strong> → Operador de fusión: si deportes no existe, usa array
                        vacío</li>
                    <li><strong>count($deportes)</strong> → Cuenta elementos del array</li>
                    <li><strong>foreach</strong> → Recorre cada elemento del array individualmente</li>
                    <li><strong>htmlspecialchars()</strong> → Sanitiza datos para prevenir XSS</li>
                </ul>
            </div>

            <?php
        } else {
            /*
             * PROTECCIÓN: Acceso directo sin formulario
             */
            ?>

            <div class="header">
                <h1 style="color: #ff4444;">❌ Error</h1>
                <p>Acceso no permitido</p>
            </div>

            <div class="result-container" style="border-color: #ff4444;">
                <p style="color: #ff4444; font-size: 1.2em; text-align: center;">
                    No se recibieron datos. Por favor, usa el formulario para enviar información.
                </p>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="actividad11.php" class="submit-btn"
                        style="display: inline-block; width: auto; padding: 15px 40px;">
                        ← Ir al Formulario
                    </a>
                </div>
            </div>

            <?php
        }
        ?>

    </div>
</body>

</html>