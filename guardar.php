<?php

// Conexión a la base de datos
include('conexion.php');

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Captura de los datos del formulario
    $telefono = $_POST['telefono'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];

    // Validación de campos vacíos
    if (empty($telefono) || empty($nombre) || empty($apellido) || empty($correo)) {
        echo "Todos los campos son obligatorios.";
        exit;  // Detiene el script si falta algún campo.
    }

    try {
        // Insertar los datos en la base de datos
        $sql = "INSERT INTO Visitas (telefono, nombre, apellido, correo) 
                VALUES (:telefono, :nombre, :apellido, :correo)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':correo', $correo);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Visita registrada exitosamente.";
        } else {
            echo "Error al registrar la visita.";
        }
    } catch (PDOException $e) {
        echo "Error al registrar la visita: " . $e->getMessage();
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <title>Visita registrada</title>
</head>
<body>
<br><br>
<button class="btn-verde">
<a href="listado.php">Ir al listado de visitas😁</a>
</button> 
</body>
</html>

