<?php

$isDocker = getenv('IS_DOCKER'); // Variable de entorno opcional

$serverName = $isDocker ? "visitas_sqlserver" : "localhost\\SQLEXPRESS";
$database = "RegistroVisitas";
$username = $isDocker ? "sa" : "";
$password = $isDocker ? "DevOps12345!" : "";

try {
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$database;TrustServerCertificate=Yes", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
