<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 9 - Formulario</title>
    <!-- Sistema de CSS Modular -->
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/components.css">
    <link rel="stylesheet" href="./css/actividad9.css">
</head>

<body>
    <div class="container">
        <!-- Botón para volver al menú principal -->
        <a href="../Actividad GUIA 20/index.html" class="back-button">← Volver al Menú</a>

        <!-- Encabezado de la actividad -->
        <div class="header">
            <h1>📝 Actividad 9</h1>
            <p>Formulario de Entrada de Datos con PHP</p>
        </div>

        <!-- Contenedor del formulario -->
        <div class="form-container">
            <!-- 
                FORMULARIO:
                - action="actividad9_procesar.php" → Archivo que recibirá los datos
                - method="POST" → Método de envío (datos no visibles en URL)
            -->
            <form action="actividad9_procesar.php" method="POST">

                <!-- Campo de Nombre -->
                <div class="form-group">
                    <!-- 
                        LABEL: Etiqueta descriptiva
                        - for="nombre" → Conecta la etiqueta con el input
                    -->
                    <label for="nombre">Ingrese su nombre:</label>

                    <!-- 
                        INPUT:
                        - type="text" → Campo de texto
                        - id="nombre" → Identificador único
                        - name="nombre" → IMPORTANTE: Es el nombre que usará PHP con $_POST['nombre']
                        - required → Campo obligatorio (validación HTML5)
                    -->
                    <input type="text" id="nombre" name="nombre" placeholder="Ej: Juan Pérez"
                        required>
                </div>

                <!-- Campo de Edad -->
                <div class="form-group">
                    <label for="edad">Ingrese su edad:</label>

                    <!-- 
                        INPUT NÚMERO:
                        - type="number" → Solo acepta números
                        - min="1" → Edad mínima
                        - max="120" → Edad máxima
                        - name="edad" → Se accede con $_POST['edad']
                    -->
                    <input type="number" id="edad" name="edad" placeholder="Ej: 25" min="1"
                        max="120" required>
                </div>

                <!-- Botón de envío -->
                <button type="submit" class="submit-btn">
                    Enviar Datos
                </button>
            </form>
        </div>

        <!-- Sección informativa -->
        <div class="info-section">
            <h3>💡 ¿Qué pasa al enviar?</h3>
            <ul>
                <li>Los datos se envían a <strong>actividad9_procesar.php</strong></li>
                <li>PHP recibe los datos con <strong>$_POST['nombre']</strong> y
                    <strong>$_POST['edad']</strong>
                </li>
                <li>Se procesan y muestran en una nueva página</li>
            </ul>
        </div>
    </div>
</body>

</html>