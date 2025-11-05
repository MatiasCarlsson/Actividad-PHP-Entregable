<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 18 - Funciones en PHP</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-button">← Volver al Menú</a>

        <div class="header">
            <h1>Actividad 18</h1>
            <p>Funciones en PHP - Validación de Claves</p>
        </div>

        <div class="form-container">
            <form action="actividad18_procesar.php" method="post">
                <div class="form-group">
                    <label for="usuario">Nombre de usuario:</label>
                    <input type="text" id="usuario" name="usuario"
                        placeholder="Ingrese su nombre de usuario" required>
                </div>

                <div class="form-group">
                    <label for="clave1">Clave (primera vez):</label>
                    <input type="password" id="clave1" name="clave1" placeholder="Ingrese su clave"
                        required>
                </div>

                <div class="form-group">
                    <label for="clave2">Clave (segunda vez):</label>
                    <input type="password" id="clave2" name="clave2" placeholder="Confirme su clave"
                        required>
                </div>

                <button type="submit" class="submit-btn">Validar Claves</button>
            </form>
        </div>

        <div class="info-section">
            <h3>🔒 Información de Seguridad</h3>
            <ul>
                <li>Las claves deben coincidir exactamente</li>
                <li>Se validará que ambas claves sean idénticas</li>
                <li>Si las claves son diferentes, recibirá un mensaje de advertencia</li>
                <li>Esta validación ayuda a evitar errores de tipeo al crear cuentas</li>
            </ul>
        </div>

        <div class="analysis-box">
            <h3>💡 Concepto de Funciones en PHP</h3>
            <p>En esta actividad se utiliza una <strong>función personalizada</strong> para validar
                que las dos claves ingresadas sean idénticas. Las funciones permiten reutilizar
                código y organizar mejor la lógica del programa.</p>
        </div>
    </div>
</body>

</html>