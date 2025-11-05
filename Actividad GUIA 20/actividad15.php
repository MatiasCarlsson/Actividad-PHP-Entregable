<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 15 - Pedido de Pizzas</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-button">← Volver al Menú</a>

        <div class="header">
            <h1>🍕 Actividad 15</h1>
            <p>Pedido de Pizzas Online</p>
        </div>

        <div class="form-container">
            <form action="actividad15_procesar.php" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre"
                        placeholder="Ingrese su nombre completo" required>
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion"
                        placeholder="Ingrese su dirección de entrega" required>
                </div>

                <div class="form-group">
                    <h3>Seleccione sus pizzas:</h3>

                    <div
                        style="background: var(--color-primary-light); padding: 20px; border-radius: var(--radius-md); margin: 15px 0; border: 1px solid var(--color-primary);">
                        <label style="display: flex; align-items: center; cursor: pointer;">
                            <input type="checkbox" name="jamon_queso" value="1"
                                style="width: 20px; height: 20px; margin-right: 10px; cursor: pointer;">
                            <span style="font-size: 1.2em; font-weight: 600;">🧀 Jamón y
                                Queso</span>
                        </label>
                        <div style="margin-top: 10px; margin-left: 30px;">
                            <label>Cantidad:</label>
                            <input type="number" name="cantidad_jamon_queso" min="0" value="0"
                                style="width: 80px; padding: 8px; background: var(--bg-dark); border: 2px solid rgba(0, 255, 127, 0.5); border-radius: var(--radius-sm); color: var(--text-primary); margin-left: 10px;">
                        </div>
                    </div>

                    <div
                        style="background: var(--color-primary-light); padding: 20px; border-radius: var(--radius-md); margin: 15px 0; border: 1px solid var(--color-primary);">
                        <label style="display: flex; align-items: center; cursor: pointer;">
                            <input type="checkbox" name="napolitana" value="1"
                                style="width: 20px; height: 20px; margin-right: 10px; cursor: pointer;">
                            <span style="font-size: 1.2em; font-weight: 600;">🍅 Napolitana</span>
                        </label>
                        <div style="margin-top: 10px; margin-left: 30px;">
                            <label>Cantidad:</label>
                            <input type="number" name="cantidad_napolitana" min="0" value="0"
                                style="width: 80px; padding: 8px; background: var(--bg-dark); border: 2px solid rgba(0, 255, 127, 0.5); border-radius: var(--radius-sm); color: var(--text-primary); margin-left: 10px;">
                        </div>
                    </div>

                    <div
                        style="background: var(--color-primary-light); padding: 20px; border-radius: var(--radius-md); margin: 15px 0; border: 1px solid var(--color-primary);">
                        <label style="display: flex; align-items: center; cursor: pointer;">
                            <input type="checkbox" name="muzzarella" value="1"
                                style="width: 20px; height: 20px; margin-right: 10px; cursor: pointer;">
                            <span style="font-size: 1.2em; font-weight: 600;">🧈 Muzzarella</span>
                        </label>
                        <div style="margin-top: 10px; margin-left: 30px;">
                            <label>Cantidad:</label>
                            <input type="number" name="cantidad_muzzarella" min="0" value="0"
                                style="width: 80px; padding: 8px; background: var(--bg-dark); border: 2px solid rgba(0, 255, 127, 0.5); border-radius: var(--radius-sm); color: var(--text-primary); margin-left: 10px;">
                        </div>
                    </div>
                </div>

                <button type="submit" class="submit-btn">🛒 Confirmar Pedido</button>
            </form>
        </div>

        <div class="info-section">
            <h3>ℹ️ Información del Pedido</h3>
            <ul>
                <li>Seleccione las pizzas que desea ordenar</li>
                <li>Ingrese la cantidad de cada tipo</li>
                <li>Su pedido será guardado en nuestro sistema</li>
                <li>Tiempo estimado de entrega: <strong>30-45 minutos</strong></li>
            </ul>
        </div>
    </div>
</body>

</html>