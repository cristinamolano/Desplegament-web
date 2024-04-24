<?php
// Elimina.php

// Connexió a la base de dades
$conn = new mysqli("192.168.1.26", "admin", "admin", "la_meva_botiga");

// Verificar connexió
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Recollir id del producte a eliminar
$id_producte = $_GET['id'];

// Eliminar el producte de la base de dades
$sql = "DELETE FROM productes WHERE id = $id_producte";
if ($conn->query($sql) === TRUE) {
    echo "Producte eliminat correctament.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tancar la connexió
$conn->close();
?>
