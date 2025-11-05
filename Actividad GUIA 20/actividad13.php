<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 13 - Control Textarea</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/components.css">
</head>

<body>
    <div class="container">
        <a href="index.html" class="back-button">← Volver al Menú</a>

        <div class="header">
            <h1>Actividad 13</h1>
            <p>Formulario de Contrato con Textarea</p>
        </div>

        <div class="form-container">
            <form action="actividad13_procesar.php" method="post">
                <div class="form-group">
                    <h3>Complete el siguiente contrato:</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 15px;">Reemplace los
                        puntos suspensivos [...] con la información correspondiente</p>
                    <textarea name="contrato" rows="12"
                        style="width: 100%; padding: 15px; background: var(--bg-dark); border: 2px solid rgba(0, 255, 127, 0.5); border-radius: var(--radius-sm); color: var(--text-primary); font-size: 1em; font-family: var(--font-family); line-height: 1.6; resize: vertical;"
                        required>En la ciudad de [.........], se acuerda entre la Empresa [.........] representada por el Sr. [.........] en su carácter de Apoderado, con domicilio en la calle [.........] y el Sr. [.........], futuro empleado con domicilio en [.........], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90, 92, 93, 94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.</textarea>
                </div>

                <button type="submit" class="submit-btn">Generar Contrato Final</button>
            </form>
        </div>

        <div class="info-section">
            <h3>Instrucciones</h3>
            <ul>
                <li>Complete todos los campos marcados con <strong>[.......]</strong></li>
                <li>Asegúrese de ingresar datos válidos</li>
                <li>El contrato final se generará con sus modificaciones</li>
            </ul>
        </div>
    </div>
</body>

</html>