<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 14 - Vectores Tradicionales</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-button">← Volver al Menú</a>

        <div class="header">
            <h1>Actividad 14</h1>
            <p>Vectores Tradicionales - Días de la Semana</p>
        </div>

        <div class="result-container">
            <?php
            // Definir vector con los días de la semana
            $diasSemana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");

            echo "<h3 style='color: var(--color-primary); margin-bottom: 20px;'>📅 Vector de Días de la Semana</h3>";

            echo "<div class='result-item'>";
            echo "<strong>Primer elemento del vector:</strong> <span style='font-size: 1.3em;'>" . $diasSemana[0] . "</span>";
            echo "</div>";

            echo "<div class='result-item'>";
            echo "<strong>Último elemento del vector:</strong> <span style='font-size: 1.3em;'>" . $diasSemana[count($diasSemana) - 1] . "</span>";
            echo "</div>";

            echo "<div class='result-item'>";
            echo "<strong>Total de elementos:</strong> <span>" . count($diasSemana) . " días</span>";
            echo "</div>";
            ?>
        </div>

        <div class="info-section">
            <h3>🔍 Todos los días de la semana</h3>
            <div
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 15px; margin-top: 15px;">
                <?php
                foreach ($diasSemana as $index => $dia) {
                    echo "<div style='background: var(--color-primary-light); padding: 15px; border-radius: var(--radius-md); text-align: center; border: 1px solid var(--color-primary);'>";
                    echo "<div style='color: var(--color-primary); font-weight: bold;'>Índice $index</div>";
                    echo "<div style='font-size: 1.2em; margin-top: 5px;'>$dia</div>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>

        <div class="analysis-box">
            <h3>💡 Conceptos utilizados</h3>
            <ul style="list-style: none; padding: 0;">
                <li style="padding: 8px 0;"><strong>array():</strong> Función para crear vectores en
                    PHP</li>
                <li style="padding: 8px 0;"><strong>$vector[0]:</strong> Acceso al primer elemento
                    (índice 0)</li>
                <li style="padding: 8px 0;"><strong>count():</strong> Obtiene la cantidad de
                    elementos</li>
                <li style="padding: 8px 0;"><strong>foreach:</strong> Recorre todos los elementos
                    del vector</li>
            </ul>
        </div>
    </div>
</body>

</html>