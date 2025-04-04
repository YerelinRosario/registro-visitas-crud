<?php

//incluimos la conexion de base de datos 
include("conexion.php");

// Obtener todas las visitas de la base de datos
$query = "SELECT * FROM Visitas";
$stmt = $conn->prepare($query);
$stmt->execute();
$visitas = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Visitas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png" type="image/png">

</head>
<body>
    <h1 class="visitah1">Visitas Registradas</h1>
    <table>
        <thead>
            <tr class="columna">
                <th>ID</th>
                <th>Telefono</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo Electronico</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($visitas as $visita): ?>
        <tr class="filas">
            <td><?php echo $visita['id']; ?></td>
            <td><?php echo $visita['telefono']; ?></td>
            <td><?php echo $visita['nombre']; ?></td>
            <td><?php echo $visita['apellido']; ?></td>
            <td><?php echo $visita['correo']; ?></td>
            <td>
                <button class="btn-eliminar"><a href="eliminar.php?id=<?php echo $visita['id']; ?>" onclick="return confirm('¿Seguro que deseas eliminar esta visita?')">Eliminar</a></button>                <button class="btn-editar"><a href="editar.php?id=<?php echo $visita['id']; ?>">Editar</a></button>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
        </tbody>
    </table>
    <button class="btn-verde">
    <a href="index.php">Registrar nueva visita</a>
    </button>
</body>
</html>