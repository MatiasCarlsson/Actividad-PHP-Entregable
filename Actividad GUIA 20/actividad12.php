<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 12 - Control Select</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-button">← Volver al Menú</a>

        <div class="header">
            <h1>Actividad 12</h1>
            <p>Formulario con Control Select</p>
        </div>

        <div class="form-container">
            <form action="actividad12_procesar.php" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre de la persona:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre"
                        required>
                </div>

                <div class="form-group">
                    <label for="ingresos">Ingresos mensuales:</label>
                    <select id="ingresos" name="ingresos" required
                        style="width: 100%; padding: 12px; background: var(--bg-dark); border: 2px solid rgba(0, 255, 127, 0.5); border-radius: var(--radius-sm); color: var(--text-primary); font-size: 1em; transition: all var(--transition-normal);">
                        <option value="">Seleccione un rango</option>
                        <option value="1-1000">$1 - $1000</option>
                        <option value="1001-3000">$1001 - $3000</option>
                        <option value=">3000">Mayor a $3000</option>
                    </select>
                </div>

                <button type="submit" class="submit-btn">Consultar Impuestos</button>
            </form>
        </div>

        <div class="info-section">
            <h3>Información sobre impuestos</h3>
            <ul>
                <li>Las personas con ingresos <strong>mayores a $3000</strong> deben pagar impuestos
                    a las ganancias</li>
                <li>Los rangos menores están exentos del pago de impuestos</li>
            </ul>
        </div>
    </div>
</body>

</html>