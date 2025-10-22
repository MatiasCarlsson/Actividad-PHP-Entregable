<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjeta de Presentación</title>
    <link rel="stylesheet" href="procesar.css">
</head>

<body>
    <?php
    // Verificar si se recibieron datos por POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir y sanitizar los datos
        $nombre = htmlspecialchars($_POST['nombre']);
        $edad = htmlspecialchars($_POST['edad']);
        $hobby = htmlspecialchars($_POST['hobby']);

        // Generar inicial para el avatar
        $inicial = strtoupper(substr($nombre, 0, 1));
        ?>

        <div class="card-container">
            <div class="card">
                <div class="success-message">
                    ✅ ¡Tarjeta generada exitosamente!
                </div>

                <div class="avatar">
                    <?php echo $inicial; ?>
                </div>

                <h1><?php echo $nombre; ?></h1>

                <div class="info-section">
                    <div class="info-item">
                        <span class="icon">🎂</span>
                        <strong>Edad:</strong>
                        <span><?php echo $edad; ?> años</span>
                    </div>

                    <div class="info-item">
                        <span class="icon">🎨</span>
                        <strong>Hobby Favorito:</strong>
                        <span><?php echo $hobby; ?></span>
                    </div>
                </div>

                <a href="index.php" class="btn-back">
                    ← Volver al Formulario
                </a>

                <div
                    style="margin-top: 30px; padding: 20px; background: #fff3cd; border-radius: 10px; text-align: left;">
                    <h3 style="color: #856404; margin-bottom: 10px;">📚 Datos Recibidos (Superglobal
                        $_POST):</h3>
                    <pre
                        style="background: white; padding: 15px; border-radius: 5px; overflow-x: auto;">
        <?php print_r($_POST); ?>
                        </pre>
                </div>
            </div>
        </div>

        <?php
    } else {
        // Si alguien intenta acceder directamente sin enviar el formulario
        header("Location: index.php");
        exit();
    }
    ?>
</body>

</html>