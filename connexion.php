<?php
// Informations de connexion à la base de données
$host = 'localhost'; // Hôte de la base de données (généralement localhost)
$username = 'root';  // Nom d'utilisateur de la base de données
$password = '';      // Mot de passe de la base de données
$database = 'gestionhopital'; // Nom de la base de données

// Établir la connexion avec la base de données
$conn = new mysqli($host, $username, $password, $database);

// Vérifier si la connexion a réussi
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Optionnel : définir l'encodage des caractères pour éviter les problèmes liés aux accents
$conn->set_charset("utf8");
?>