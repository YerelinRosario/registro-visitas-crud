
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Visitas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png" type="image/png">
</head>
<body>
    <h1>Registro de Visitas</h1>
    <form action="guardar.php" method="POST">
        <label for="telefono">Telefono:</label>
        <input type="text" id="telefono" name="telefono" required><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <button type="submit">Agregar Visita</button>
    </form>

    <button class="btn-verde" style="margin: 20px 0;">
    <a href="listado.php">Visitas Registradas</a>
    </button>
</body>
</html>