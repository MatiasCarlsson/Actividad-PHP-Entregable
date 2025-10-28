<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 10 - Formulario con Radio Buttons</title>
    <!-- Sistema de CSS Modular -->
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="stylesheet" href="./css/actividad10.css">
</head>

<body>
    <div class="container">
        <!-- Botón para volver al menú -->
        <a href="index.html" class="back-button">← Volver al Menú</a>

        <!-- Encabezado -->
        <div class="header">
            <h1>📝 Actividad 10</h1>
            <p>Formulario con Opciones de Selección (Radio Buttons)</p>
        </div>

        <!-- Contenedor del formulario -->
        <div class="form-container">
            <!-- 
                FORMULARIO con radio buttons
                - Los radio buttons permiten seleccionar UNA opción de varias
                - Todos deben tener el mismo "name" para que funcionen como grupo
            -->
            <form method="POST" action="actividad10_procesar.php">

                <!-- Campo de nombre -->
                <div class="form-group">
                    <h3>Ingrese su nombre:</h3>
                    <input type="text" name="nombre" placeholder="Ej: María González" required>
                </div>

                <!-- Grupo de radio buttons -->
                <div class="form-group">
                    <h3>Seleccione su nivel de estudios:</h3>

                    <!-- 
                        RADIO BUTTONS:
                        - name="estudio" → Todos tienen el mismo name para agruparse
                        - value="..." → El valor que recibirá PHP con $_POST['estudio']
                        - Solo uno puede estar seleccionado a la vez
                    -->
                    <ul class="radio-group">
                        <li class="radio-option">
                            <input type="radio" id="sin-estudios" name="estudio"
                                value="Sin estudios" required>
                            <label for="sin-estudios">🚫 Sin estudios</label>
                        </li>

                        <li class="radio-option">
                            <input type="radio" id="primarios" name="estudio"
                                value="Estudios primarios">
                            <label for="primarios">📚 Estudios primarios</label>
                        </li>

                        <li class="radio-option">
                            <input type="radio" id="secundarios" name="estudio"
                                value="Estudios secundarios">
                            <label for="secundarios">🎓 Estudios secundarios</label>
                        </li>

                        <li class="radio-option">
                            <input type="radio" id="universitarios" name="estudio"
                                value="Estudios universitarios">
                            <label for="universitarios">🎯 Estudios universitarios</label>
                        </li>
                    </ul>
                </div>

                <!-- Botón de envío -->
                <button type="submit" class="submit-btn">
                    🚀 Enviar Datos
                </button>
            </form>
        </div>

        <!-- Sección informativa -->
        <div class="info-section">
            <h3>💡 Sobre los Radio Buttons:</h3>
            <ul>
                <li><strong>name</strong> igual en todas las opciones para agruparlas</li>
                <li><strong>value</strong> es lo que recibirá PHP al seleccionar</li>
                <li>Solo se puede seleccionar <strong>una opción</strong> a la vez</li>
                <li>PHP recibe el valor con <strong>$_POST['estudio']</strong></li>
            </ul>
        </div>
    </div>
</body>

</html>