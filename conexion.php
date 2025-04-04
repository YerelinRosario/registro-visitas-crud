<?php

$serverName= "localhost\\SQLEXPRESS";
$database= "RegistroVisitas";
$connectionOptions= [
    "Database"=> $database,
    "TrustServerCertificate" => true, //evita errores con certificados
    "CharacterSet" => "UTF-8" //esto asegura compatibilidad con caracteres especiales
];

try {

     // Crear la conexión usando PDO con autenticación de Windows
    $conn = new PDO("sqlsrv:Server=$serverName; Database=$database;TrustServerCertificate=Yes", "", "");

    // Configurar PDO para lanzar excepciones en caso de error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    die("Error de conexion: " . $e->getMessage());
}
?>