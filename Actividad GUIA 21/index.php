<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 21 - Formulario de Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>📋 Formulario de Registro</h1>
        <p class="descripcion">
            Completa el formulario con tu información personal para generar tu tarjeta de
            presentación.
        </p>

        <form action="procesar.php" method="POST">
            <div class="form-group">
                <label for="nombre">
                    Nombre Completo <span class="required">*</span>
                </label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej: Juan Pérez" required>
            </div>

            <div class="form-group">
                <label for="edad">
                    Edad <span class="required">*</span>
                </label>
                <input type="number" id="edad" name="edad" placeholder="Ej: 25" min="1" max="120"
                    required>
            </div>

            <div class="form-group">
                <label for="hobby">
                    Hobby Favorito <span class="required">*</span>
                </label>
                <input type="text" id="hobby" name="hobby" placeholder="Ej: Programación" required>
            </div>

            <button type="submit">
                🚀 Generar Tarjeta
            </button>
        </form>
    </div>
</body>

</html>