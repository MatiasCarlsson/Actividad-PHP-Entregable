<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Recibidos - Actividad 9</title>
    <!-- Sistema de CSS Modular (todos los estilos ahora están en components.css) -->
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="stylesheet" href="./css/actividad9.css">
    <style>
        /* Estilos específicos únicamente para esta página de procesamiento */
        .code-section {
            background: var(--bg-dark);
            padding: var(--spacing-md);
            border-radius: var(--radius-md);
            margin: var(--spacing-md) 0;
            border: var(--border-primary);
        }

        .code-section h3 {
            color: var(--color-primary);
            margin-bottom: 15px;
        }

        .code-section pre {
            color: var(--color-primary);
            font-family: var(--font-mono);
            overflow-x: auto;
            padding: 15px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: var(--radius-sm);
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Botón para volver al formulario -->
        <a href="actividad9.php" class="back-button">← Volver al Formulario</a>

        <?php
        /*
         * VERIFICACIÓN DEL MÉTODO DE ENVÍO
         * $_SERVER["REQUEST_METHOD"] contiene el método HTTP usado (GET, POST, etc.)
         * Verificamos que sea POST para asegurarnos que los datos vienen del formulario
         */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            /*
             * RECEPCIÓN DE DATOS
             * $_POST es un array asociativo que contiene todos los datos enviados por POST
             * $_POST['nombre'] obtiene el valor del input con name="nombre"
             * $_POST['edad'] obtiene el valor del input con name="edad"
             */

            /*
             * SANITIZACIÓN DE DATOS
             * htmlspecialchars() convierte caracteres especiales en entidades HTML
             * Ejemplo: <script> se convierte en &lt;script&gt;
             */
            $nombre = htmlspecialchars($_POST['nombre']);
            $edad = htmlspecialchars($_POST['edad']);

            ?>

            <!-- Mensaje de éxito -->
            <div class="success-message">
                <h2>✅ ¡Datos Recibidos Exitosamente!</h2>
                <p>La información ha sido procesada correctamente</p>
            </div>

            <!-- Encabezado -->
            <div class="header">
                <h1>📊 Resultados</h1>
                <p>Información capturada desde el formulario</p>
            </div>

            <!-- Contenedor de resultados -->
            <div class="result-container">
                <h3 style="color: #00ff7f; margin-bottom: 20px;">📋 Datos del Usuario:</h3>

                <!-- Mostrar nombre -->
                <div class="result-item">
                    <strong>👤 Nombre:</strong>
                    <span><?php echo $nombre; ?></span>
                </div>

                <!-- Mostrar edad -->
                <div class="result-item">
                    <strong>🎂 Edad:</strong>
                    <span><?php echo $edad; ?> años</span>
                </div>
            </div>

            <!-- Análisis de edad con condicionales -->
            <div class="analysis-box">
                <h3>🔍 Análisis de Edad:</h3>
                <?php
                /*
                 * ESTRUCTURAS CONDICIONALES
                 * Evaluamos la edad para mostrar diferentes mensajes
                 */

                // Si es menor de 18
                if ($edad < 18) {
                    echo "<p style='color: #ffc107;'>⚠️ Eres menor de edad.</p>";
                    echo "<p>Aún no puedes votar ni obtener licencia de conducir en muchos países.</p>";
                }
                // Si está entre 18 y 64
                elseif ($edad >= 18 && $edad < 65) {
                    echo "<p style='color: #00ff7f;'>✅ Eres mayor de edad.</p>";
                    echo "<p>Tienes todos los derechos civiles y responsabilidades de un adulto.</p>";
                }
                // Si es 65 o más
                else {
                    echo "<p style='color: #00ccff;'>👴 Eres adulto mayor.</p>";
                    echo "<p>En muchos países tienes derecho a beneficios especiales y jubilación.</p>";
                }

                /*
                 * CÁLCULO DEL AÑO DE NACIMIENTO
                 * date("Y") obtiene el año actual
                 * Restamos la edad para obtener un año aproximado de nacimiento
                 */
                $anioActual = date("Y"); // 2025
                $anioNacimiento = $anioActual - $edad;

                echo "<p style='margin-top: 15px; border-top: 2px solid rgba(255, 193, 7, 0.3); padding-top: 15px;'>";
                echo "📅 Año aproximado de nacimiento: <strong style='color: #ffc107;'>$anioNacimiento</strong>";
                echo "</p>";
                ?>
            </div>

            <!-- Mostrar el array $_POST completo -->
            <div class="code-section">
                <h3>🛠️ Superglobal $_POST:</h3>
                <p style="color: #aaa; margin-bottom: 10px;">
                    Este es el contenido completo del array $_POST que PHP recibió:
                </p>
                <pre><?php
                /*
                 * print_r() muestra el contenido de un array de forma legible
                 * Útil para depuración y ver qué datos se recibieron
                 */
                print_r($_POST);
                ?></pre>
            </div>

            <!-- Explicación del código usado -->
            <div class="code-section">
                <h3>📝 Código PHP Usado:</h3>
                <pre>
                        &lt;?php
                        // 1. Verificar que los datos vienen por POST
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
                            // 2. Recibir y sanitizar datos
                            $nombre = htmlspecialchars($_POST['nombre']);
                            $edad = htmlspecialchars($_POST['edad']);
    
                            // 3. Mostrar los datos
                            echo "Nombre: $nombre";
                            echo "Edad: $edad años";
    
                            // 4. Condicionales para análisis
                            if ($edad < 18) {
                                echo "Eres menor de edad";
                            } elseif ($edad >= 18 && $edad < 65) {
                                echo "Eres mayor de edad";
                            } else {
                                echo "Eres adulto mayor";
                            }
    
                            // 5. Cálculos
                            $anioActual = date("Y");
                            $anioNacimiento = $anioActual - $edad;
                        }
                        ?&gt;
                                        </pre>
            </div>

            <!-- Sección informativa sobre los conceptos -->
            <div class="info-section">
                <h3>💡 Conceptos Aprendidos:</h3>
                <ul>
                    <li><strong>$_POST['campo']</strong> → Obtiene el valor del input con name="campo"
                    </li>
                    <li><strong>htmlspecialchars()</strong> → Sanitiza los datos para evitar XSS</li>
                    <li><strong>$_SERVER["REQUEST_METHOD"]</strong> → Verifica el método HTTP usado</li>
                    <li><strong>if/elseif/else</strong> → Estructuras condicionales para validación</li>
                    <li><strong>date("Y")</strong> → Obtiene el año actual</li>
                    <li><strong>print_r()</strong> → Muestra el contenido de arrays (útil para debug)
                    </li>
                </ul>
            </div>

            <?php
        } else {
            /*
             * PROTECCIÓN CONTRA ACCESO DIRECTO
             * Si alguien intenta acceder a esta página sin enviar el formulario,
             * mostramos un mensaje de error y los redirigimos
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
                    <a href="actividad9.php" class="submit-btn"
                        style="display: inline-block; width: auto; padding: 15px 40px;">
                        ← Ir al Formulario
                    </a>
                </div>
            </div>

            <div class="info-section" style="border-left-color: #ff4444;">
                <h3 style="color: #ff4444;">⚠️ ¿Por qué veo este error?</h3>
                <ul>
                    <li>Intentaste acceder directamente a esta página</li>
                    <li>Esta página solo funciona cuando se envían datos desde el formulario</li>
                    <li>Debes completar el formulario en <strong>actividad9.php</strong></li>
                </ul>
            </div>

            <?php
        }
        ?>

    </div>
</body>

</html>