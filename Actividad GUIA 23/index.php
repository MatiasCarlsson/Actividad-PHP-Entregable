<?php
include("data/conexionDataBase.php");
$conexionDB = conexionDB();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 23</title>
</head>

<header>
    <nav>
        <ul>
            <li><a href="./pages/verDisfraces.php">Ver Disfraces</a></li>
            <li><a href="./pages/registro.php">Registro</a></li>
            <li><a href="./pages/login.php">Iniciar Sesión</a></li>
            <li><a href="./pages/admin.php">Panel de Administración</a></li>
        </ul>
    </nav>
</header>

<body>
    <h1>Bienvenido a la Actividad 23- Halloween</h1>

    <section class="disfraces-list">
        <div class="disfraz">
            <h2> Disfraz 1</h2>
            <p>Descripción del disfraz 1</p>
            <img src="img/fondo.jpg" alt="">
            <button class="votar">Votar</button>
        </div>
        <hr>
        <div class="disfraz">
            <h2>Disfraz 2</h2>
            <p>Descripción del disfraz 2</p>
            <img src="img/fondo.jpg" alt="">
            <button class="votar">Votar</button>
        </div>
    </section>

    <section class="registro">
        <h1>Registro de Usuarios</h1>
        <form action="procesarRegistro.php" method="POST">
            <label for="username">Nombre de Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Registrar</button>
        </form>
    </section>

    <section id="login">
        <h2>Iniciar Sesión</h2>
        <form action="procesarLogin.php" method="POST">
            <label for="loginUsername">Nombre de Usuario:</label>
            <input type="text" id="loginUsername" name="loginUsername" required>

            <label for="loginPassword">Contraseña:</label>
            <input type="password" id="loginPassword" name="loginPassword" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
    </section>

    <section class="admin">
        <h2>Panel de Administración</h2>
        <form action="procesarDisfraz.php" method="POST">
            <label for="disfrazNombre">Nombre del disfraz:</label>
            <input type="text" class="disfrazNombre" name="disfrazNombre" required>
            <label for="disfrazDescripcion">Descripción del disfraz:</label>
            <textarea name="disfrazDescripcion" id="disfrazDescripcion" required></textarea>
            <label for="disfrazFoto">Foto del disfraz:</label>
            <input type="file" class="disfrazFoto" name="disfrazFoto" accept="image/*" required>
            <button type="submit">Agregar Disfraz</button>
        </form>
    </section>

</body>

</html>