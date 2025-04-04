<?php
include 'conexion.php';

// Si se pasa un id en la URL, buscamos esa visita
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para obtener los datos de la visita
    $query = "SELECT * FROM Visitas WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $visita = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$visita) {
        die("Visita no encontrada.");
    }
}

// Si el formulario es enviado, actualizamos los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $telefono = $_POST['telefono'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];

    // Consulta para actualizar la visita
    $query = "UPDATE Visitas SET telefono = :telefono, nombre = :nombre, apellido = :apellido, correo = :correo WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "Visita actualizada con éxito.";
        header("Location: listado.php"); // Redirigir al listado después de actualizar
        exit;
    } else {
        echo "Error al actualizar la visita.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Visita</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png" type="image/png">
</head>
<body>
    <h1>Editar Visita</h1>
    <form action="editar.php?id=<?php echo $visita['id']; ?>" method="POST">
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="<?php echo $visita['telefono']; ?>" required><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $visita['nombre']; ?>" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" value="<?php echo $visita['apellido']; ?>" required><br><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" value="<?php echo $visita['correo']; ?>" required><br><br>

        <button type="submit">Actualizar Visita</button>
    </form>
</body>
</html>
