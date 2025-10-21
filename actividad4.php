<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4 - Número Aleatorio</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="activity-container">
        <a href="index.html" class="back-button">← Volver al Menú</a>

        <div class="activity-header">
            <h1>Actividad 4</h1>
            <p>Un programita más útil que "Hola Mundo"</p>
        </div>

        <div class="activity-content">
            <h3>Descripción:</h3>
            <p>Hacer un programa que genere un valor aleatorio entre 1 y 100, lo muestre por
                pantalla y además indique si es menor o igual a 50 o si es mayor.</p>
        </div>

        <div class="php-output">
            <?php
            $num = rand(1, 100);
            echo "<h2>El número generado es: $num</h2>";

            if ($num <= 50) {
                echo "<p>El número es menor o igual a 50.</p>";
            } else {
                echo "<p>El número es mayor a 50.</p>";
            }
            ?>
        </div>

        <div class="activity-content">
            <h3>Código PHP:</h3>
            <pre
                style="background: #0a0a0a; color: #00ff7f; padding: 15px; border-radius: 5px; overflow-x: auto;">
&lt;?php
    $num = rand(1, 100);
    echo "&lt;h2&gt;El número generado es: $num&lt;/h2&gt;";
   
    if ($num &lt;= 50) {
        echo "&lt;p&gt;El número es menor o igual a 50.&lt;/p&gt;";
    } else {
        echo "&lt;p&gt;El número es mayor a 50.&lt;/p&gt;";
    }
?&gt;
            </pre>
        </div>
    </div>
</body>

</html>