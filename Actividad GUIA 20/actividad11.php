<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 11 - Formulario con Checkboxes</title>
    <!-- Sistema de CSS Modular -->
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="stylesheet" href="./css/actividad11.css">
</head>

<body>
    <div class="container">
        <!-- Botón para volver al menú -->
        <a href="index.html" class="back-button">← Volver al Menú</a>

        <!-- Encabezado -->
        <div class="header">
            <h1>⚽ Actividad 11</h1>
            <p>Formulario con Checkboxes (Selección Múltiple)</p>
        </div>

        <!-- Contenedor del formulario -->
        <div class="form-container">
            <!-- 
                FORMULARIO con checkboxes
                - Los checkboxes permiten seleccionar MÚLTIPLES opciones
                - name="deportes[]" → Los corchetes [] crean un ARRAY en PHP
                - PHP recibirá: $_POST['deportes'] = ["Futbol", "Tennis", ...]
            -->
            <form action="actividad11_procesar.php" method="POST">

                <!-- Campo de nombre -->
                <div class="form-group">
                    <label for="name">Ingrese su nombre:</label>
                    <!-- 
                        INPUT TEXT:
                        - id="name" → Conecta con el label
                        - name="name" → Se accede con $_POST['name']
                    -->
                    <input type="text" id="name" name="name" placeholder="Ej: Carlos López"
                        required>
                </div>

                <!-- Grupo de checkboxes -->
                <div class="form-group">
                    <h3>Seleccione los deportes que practica:</h3>
                    <p style="color: var(--text-muted); font-size: 0.95em; margin-top: 8px;">
                        Puede seleccionar varios deportes
                    </p>

                    <!-- 
                        CHECKBOXES:
                        - name="deportes[]" → IMPORTANTE: Los [] hacen que PHP reciba un array
                        - value="..." → El valor que se enviará a PHP
                        - Puedes seleccionar 0, 1 o múltiples opciones
                    -->
                    <ul class="checkbox-group">
                        <li class="checkbox-option">
                            <input type="checkbox" id="deporte1" name="deportes[]" value="Fútbol">
                            <label for="deporte1">⚽ Fútbol</label>
                        </li>
                        <li class="checkbox-option">
                            <input type="checkbox" id="deporte2" name="deportes[]"
                                value="Baloncesto">
                            <label for="deporte2">🏀 Baloncesto</label>
                        </li>
                        <li class="checkbox-option">
                            <input type="checkbox" id="deporte3" name="deportes[]" value="Tenis">
                            <label for="deporte3">🎾 Tenis</label>
                        </li>
                        <li class="checkbox-option">
                            <input type="checkbox" id="deporte4" name="deportes[]" value="Vóley">
                            <label for="deporte4">🏐 Vóley</label>
                        </li>
                        <li class="checkbox-option">
                            <input type="checkbox" id="deporte5" name="deportes[]" value="Natación">
                            <label for="deporte5">🏊 Natación</label>
                        </li>
                    </ul>
                </div>

                <!-- Botón de envío -->
                <button type="submit" class="submit-btn">
                    Enviar Datos
                </button>
            </form>
        </div>

        <!-- Sección informativa -->
        <div class="info-section" style="margin-top: 10px;">
            <h3>💡 ¿Qué pasa al enviar?</h3>
            <ul>
                <li>Los datos se envían a <strong>actividad11_procesar.php</strong></li>
                <li>PHP recibe el nombre con <strong>$_POST['name']</strong></li>
                <li>Los deportes se reciben como <strong>array</strong> con
                    <strong>$_POST['deportes']</strong>
                </li>
                <li>Se usa <strong>foreach</strong> para recorrer todos los deportes seleccionados
                </li>
                <li>Puedes seleccionar 0, 1 o múltiples opciones</li>
            </ul>
        </div>
    </div>
</body>

</html>