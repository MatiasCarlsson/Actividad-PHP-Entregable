<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados - Actividad 10</title>
    <!-- Sistema de CSS Modular -->
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="stylesheet" href="./css/actividad10.css">
</head>

<body>
    <div class="container">
        <!-- Botón para volver al formulario -->
        <a href="actividad10.php" class="back-button">← Volver al Formulario</a>

        <?php
        /*
         * VERIFICACIÓN DEL MÉTODO POST
         * Asegura que los datos vienen del formulario
         */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            /*
             * RECEPCIÓN Y SANITIZACIÓN DE DATOS
             * htmlspecialchars() previene ataques XSS
             */
            $nombre = htmlspecialchars($_POST['nombre']);
            $estudio = htmlspecialchars($_POST['estudio']);

            ?>

            <!-- Mensaje de éxito -->
            <div class="success-message">
                <h2>✅ ¡Datos Recibidos Exitosamente!</h2>
                <p>Tu información ha sido procesada correctamente</p>
            </div>

            <!-- Encabezado -->
            <div class="header">
                <h1>📊 Resultados</h1>
                <p>Información capturada del formulario</p>
            </div>

            <!-- Contenedor de resultados -->
            <div class="result-container">
                <h3 style="color: #00ff7f; margin-bottom: 20px;">📋 Datos del Usuario:</h3>

                <!-- Mostrar nombre -->
                <div class="result-item">
                    <strong>👤 Nombre:</strong>
                    <span><?php echo $nombre; ?></span>
                </div>

                <!-- Mostrar nivel de estudios -->
                <div class="result-item">
                    <strong>🎓 Nivel de Estudios:</strong>
                    <span><?php echo $estudio; ?></span>
                </div>
            </div>

            <!-- Análisis del nivel de estudios -->
            <div class="analysis-box">
                <h3>📈 Análisis del Nivel Educativo:</h3>
                <?php
                /*
                 * ANÁLISIS CON SWITCH
                 * Evalúa el nivel de estudios y muestra mensaje personalizado
                 */
                switch ($estudio) {
                    case 'Sin estudios':
                        echo "<p style='color: #ffc107;'>⚠️ Nunca es tarde para comenzar a aprender. ";
                        echo "Considera explorar programas de educación básica para adultos.</p>";
                        break;

                    case 'Estudios primarios':
                        echo "<p style='color: #00ccff;'>📚 Has completado la educación primaria. ";
                        echo "Podrías considerar continuar con estudios secundarios para ampliar tus oportunidades.</p>";
                        break;

                    case 'Estudios secundarios':
                        echo "<p style='color: #00ff7f;'>🎓 ¡Excelente! Has completado la educación secundaria. ";
                        echo "Esto te abre las puertas a estudios universitarios o técnicos especializados.</p>";
                        break;

                    case 'Estudios universitarios':
                        echo "<p style='color: #00ff7f;'>🎯 ¡Felicidades! Cuentas con educación universitaria. ";
                        echo "Esto te proporciona amplias oportunidades profesionales y de especialización.</p>";
                        break;

                    default:
                        echo "<p>Nivel de estudios registrado correctamente.</p>";
                }
                ?>
            </div>

            <!-- Información técnica sobre radio buttons -->
            <div class="info-section">
                <h3>🔧 Sobre los Radio Buttons:</h3>
                <ul>
                    <li>Permiten seleccionar <strong>una única opción</strong> de varias</li>
                    <li>Todos los radios del grupo comparten el mismo <strong>name="estudio"</strong>
                    </li>
                    <li>PHP recibe el <strong>value</strong> del radio seleccionado</li>
                    <li>Ideal para opciones <strong>mutuamente excluyentes</strong></li>
                </ul>
            </div>

            <!-- Código PHP usado -->
            <div class="analysis-box"
                style="background: rgba(0, 255, 127, 0.05); border-color: #00ff7f;">
                <h3 style="color: #00ff7f;">💻 Código PHP Usado:</h3>
                <pre
                    style="background: #0a0a0a; padding: 15px; border-radius: 8px; color: #00ff7f; overflow-x: auto; line-height: 1.6;">
        &lt;?php
        // Recibir datos del formulario
        $nombre = htmlspecialchars($_POST['nombre']);
        $estudio = htmlspecialchars($_POST['estudio']);

        // Análisis con switch
        switch ($estudio) {
            case 'Sin estudios':
                echo "Mensaje para sin estudios";
                break;
            case 'Estudios primarios':
                echo "Mensaje para primarios";
                break;
            // ... más casos
        }
        ?&gt;
                        </pre>
            </div>

            <?php
        } else {
            /*
             * PROTECCIÓN CONTRA ACCESO DIRECTO
             * Redirige si se intenta acceder sin enviar el formulario
             */
            ?>

            <div class="header">
                <h1 style="color: #ff4444;">❌ Error</h1>
                <p>Acceso no permitido</p>
            </div>

            <div class="result-container" style="border-color: #ff4444;">
                <p style="color: #ff4444; font-size: 1.2em; text-align: center;">
                    No se recibieron datos. Por favor, usa el formulario.
                </p>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="actividad10.php" class="submit-btn"
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