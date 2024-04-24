<?php
// Nou.php

// Connexió a la base de dades
$conn = new mysqli("192.168.1.26", "admin", "admin", "la_meva_botiga");

// Verificar connexió
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Recollir dades del formulari
$nom_producte = $_POST['nom_producte'];
$preu_producte = $_POST['preu_producte'];

// Inserir el nou producte a la base de dades
$sql = "INSERT INTO productes (nom, preu) VALUES ('$nom_producte', '$preu_producte')";
if ($conn->query($sql) === TRUE) {
    echo "Nou producte afegit correctament.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tancar la connexió
$conn->close();
?>
