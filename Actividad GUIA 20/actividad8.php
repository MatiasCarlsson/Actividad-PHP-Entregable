<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 8 - Estructuras Repetitivas</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="activity-container">
        <a href="index.html" class="back-button">← Volver al Menú</a>

        <div class="activity-header">
            <h1>Actividad 8</h1>
            <p>Estructuras repetitivas (for - while - do/while)</p>
        </div>

        <div class="activity-content">
            <h3>Descripción:</h3>
            <p>Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el
                do/while.</p>
        </div>

        <div class="php-output">
            <?php
            echo "<h2>Tabla de multiplicar del 2</h2>";

            echo "<h3>Usando FOR:</h3>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = 2 * $i;
                echo "<p>2 × $i = $resultado</p>";
            }

            echo "<br><h3>Usando WHILE:</h3>";
            $i = 1;
            while ($i <= 10) {
                $resultado = 2 * $i;
                echo "<p>2 × $i = $resultado</p>";
                $i++;
            }

            echo "<br><h3>Usando DO-WHILE:</h3>";
            $i = 1;
            do {
                $resultado = 2 * $i;
                echo "<p>2 × $i = $resultado</p>";
                $i++;
            } while ($i <= 10);

            echo "<br><h3>Ejemplo adicional - Números pares del 2 al 20:</h3>";
            echo "<p><strong>Con FOR incrementando de 2 en 2:</strong></p>";
            for ($f = 2; $f <= 20; $f = $f + 2) {
                echo "<span style='margin-right: 15px;'>$f</span>";
            }
            ?>
        </div>

        <div class="activity-content">
            <h3>Código PHP:</h3>
            <pre
                style="background: #0a0a0a; color: #00ff7f; padding: 15px; border-radius: 5px; overflow-x: auto;">
&lt;?php
// Tabla de multiplicar del 2 con FOR
echo "&lt;h3&gt;Usando FOR:&lt;/h3&gt;";
for ($i = 1; $i &lt;= 10; $i++) {
    $resultado = 2 * $i;
    echo "&lt;p&gt;2 × $i = $resultado&lt;/p&gt;";
}

// Tabla de multiplicar del 2 con WHILE
echo "&lt;h3&gt;Usando WHILE:&lt;/h3&gt;";
$i = 1;
while ($i &lt;= 10) {
    $resultado = 2 * $i;
    echo "&lt;p&gt;2 × $i = $resultado&lt;/p&gt;";
    $i++;
}

// Tabla de multiplicar del 2 con DO-WHILE
echo "&lt;h3&gt;Usando DO-WHILE:&lt;/h3&gt;";
$i = 1;
do {
    $resultado = 2 * $i;
    echo "&lt;p&gt;2 × $i = $resultado&lt;/p&gt;";
    $i++;
} while ($i &lt;= 10);
?&gt;
            </pre>
        </div>
    </div>
</body>

</html>