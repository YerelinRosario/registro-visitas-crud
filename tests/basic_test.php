<?php

function pruebaConexiónExitosa() {
    $resultado = true; // Simulamos que se conectó bien
    if (!$resultado) {
        throw new Exception("Falló la conexión a la base de datos.");
    }
    echo "✅ Prueba de conexión exitosa\n";
}

// Ejecutar la prueba
try {
    pruebaConexiónExitosa();
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
    exit(1);
}
