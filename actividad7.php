<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 7 - Estructura Condicional</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="activity-container">
        <a href="index.html" class="back-button">← Volver al Menú</a>

        <div class="activity-header">
            <h1>Actividad 7</h1>
            <p>Estructura condicional (if)</p>
        </div>

        <div class="activity-content">
            <h3>Descripción:</h3>
            <p>Generar un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número (Ej.
                si se genera el 3 luego mostrar en la página el string "tres").</p>
        </div>

        <div class="php-output">
            <?php
            $num = rand(1, 3);

            echo "<h2>Número generado: $num</h2>";
            echo "<h3>Usando estructura switch:</h3>";
            echo "<p>El número generado es: ";

            switch ($num) {
                case 1:
                    echo "uno";
                    break;
                case 2:
                    echo "dos";
                    break;
                case 3:
                    echo "tres";
                    break;
            }
            echo "</p>";

            echo "<br><h3>Usando estructura if-else:</h3>";
            echo "<p>El número generado es: ";
            if ($num == 1) {
                echo "uno";
            } else if ($num == 2) {
                echo "dos";
            } else if ($num == 3) {
                echo "tres";
            }
            echo "</p>";

            echo "<br><h3>Ejemplo adicional - Evaluación del número:</h3>";
            if ($num == 1) {
                echo "<p>Es el número más pequeño del rango.</p>";
            } else if ($num == 2) {
                echo "<p>Es el número del medio del rango.</p>";
            } else {
                echo "<p>Es el número más grande del rango.</p>";
            }
            ?>
        </div>

        <div class="activity-content">
            <h3>Código PHP:</h3>
            <pre
                style="background: #0a0a0a; color: #00ff7f; padding: 15px; border-radius: 5px; overflow-x: auto;">
&lt;?php
   $num = rand(1, 3);

   echo "El número generado es: ";
   switch ($num) {
       case 1:
           echo "uno";
           break;
       case 2:
           echo "dos";
           break;
       case 3:
           echo "tres";
           break;
   }
   
   // Alternativa con if-else
   if ($num == 1) {
       echo "uno";
   } else if ($num == 2) {
       echo "dos";
   } else if ($num == 3) {
       echo "tres";
   }
?&gt;
            </pre>
        </div>
    </div>
</body>

</html>