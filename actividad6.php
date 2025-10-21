<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 6 - Variables String</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="activity-container">
        <a href="index.html" class="back-button">← Volver al Menú</a>

        <div class="activity-header">
            <h1>Actividad 6</h1>
            <p>Variables de tipo string</p>
        </div>

        <div class="activity-content">
            <h3>Descripción:</h3>
            <p>Definir tres variables enteras. Luego definir un string que incorpore dichas
                variables y las sustituya en tiempo de ejecución. Recordar que una variable se
                sustituye cuando el string está encerrado por comillas dobles.</p>
        </div>

        <div class="php-output">
            <?php
            $string1 = "Rojo";
            $string2 = "Amarillo";
            $string3 = "Verde";

            echo "<h2>Variables definidas:</h2>";
            echo "<p>Variable 1: $string1</p>";
            echo "<p>Variable 2: $string2</p>";
            echo "<p>Variable 3: $string3</p>";

            echo "<br><h3>Sustitución en string:</h3>";
            echo "<p>El semáforo tiene tres colores: $string1, $string2, $string3.</p>";

            echo "<br><h3>Ejemplo adicional con variables numéricas:</h3>";
            $precio1 = 90;
            $precio2 = 150;
            $precio3 = 75;
            echo "<p>Los precios de los productos son: $precio1, $precio2 y $precio3 pesos respectivamente.</p>";
            ?>
        </div>

        <div class="activity-content">
            <h3>Código PHP:</h3>
            <pre
                style="background: #0a0a0a; color: #00ff7f; padding: 15px; border-radius: 5px; overflow-x: auto;">
&lt;?php
    $string1 = "Rojo";
    $string2 = "Amarillo";
    $string3 = "Verde";

    echo "El semáforo tiene tres colores: $string1, $string2, $string3.";
    
    // Ejemplo adicional
    $precio1 = 90;
    $precio2 = 150;
    $precio3 = 75;
    echo "Los precios son: $precio1, $precio2 y $precio3 pesos.";
?&gt;
            </pre>
        </div>
    </div>
</body>

</html>