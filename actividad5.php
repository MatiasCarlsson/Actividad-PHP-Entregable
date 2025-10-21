<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 5 - Tipos de Variables</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="activity-container">
        <a href="index.html" class="back-button">← Volver al Menú</a>

        <div class="activity-header">
            <h1>Actividad 5</h1>
            <p>Tipos de variables</p>
        </div>

        <div class="activity-content">
            <h3>Descripción:</h3>
            <p>Definir una variable de cada tipo: integer, double, string y boolean. Luego
                imprimirlas en la página, una por línea.</p>
        </div>

        <div class="php-output">
            <?php
            $int = 10;
            $double = 10.5;
            $string = "String";
            $boolean = true;

            echo "<h2>Variables definidas:</h2>";
            echo "<p><strong>Variable Integer:</strong> $int</p>";
            echo "<p><strong>Variable Double:</strong> $double</p>";
            echo "<p><strong>Variable String:</strong> $string</p>";
            echo "<p><strong>Variable Boolean:</strong> " . ($boolean ? 'true' : 'false') . "</p>";

            echo "<br><h3>Información adicional sobre tipos:</h3>";
            echo "<p>Tipo de \$int: " . gettype($int) . "</p>";
            echo "<p>Tipo de \$double: " . gettype($double) . "</p>";
            echo "<p>Tipo de \$string: " . gettype($string) . "</p>";
            echo "<p>Tipo de \$boolean: " . gettype($boolean) . "</p>";
            ?>
        </div>

        <div class="activity-content">
            <h3>Código PHP:</h3>
            <pre
                style="background: #0a0a0a; color: #00ff7f; padding: 15px; border-radius: 5px; overflow-x: auto;">
&lt;?php
    $int = 10;
    $double = 10.5;
    $string = "String";
    $boolean = true;
    
    echo "&lt;p&gt;Variable Integer: $int&lt;/p&gt;";
    echo "&lt;p&gt;Variable Double: $double&lt;/p&gt;";
    echo "&lt;p&gt;Variable String: $string&lt;/p&gt;";
    echo "&lt;p&gt;Variable Boolean: " . ($boolean ? 'true' : 'false') . "&lt;/p&gt;";
?&gt;
            </pre>
        </div>
    </div>
</body>

</html>