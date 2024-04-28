<?php
/**
 * Afegeix un nou producte a la base de dades.
 *
 * Aquest script permet afegir un nou producte a la base de dades
 * amb el nom i el preu especificats.
 *
 * @param string $nom_producte El nom del producte a afegir.
 * @param float $preu_producte El preu del producte a afegir.
 * @return bool True si s'ha afegit el producte amb èxit, fals si hi ha hagut un error.
 * @author Cristina Molano
 * @version 1.0
 */

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
