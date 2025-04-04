<?php
include 'conexion.php';
include 'plantilla.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para eliminar la visita
    $query = "DELETE FROM Visitas WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "Visita eliminada con éxito.";
    } else {
        echo "Error al eliminar la visita.";
    }
}

header("Location: listado.php"); // Redirigir después de eliminar
exit;
