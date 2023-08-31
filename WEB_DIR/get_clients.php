<?php
// Verbindung zur Datenbank herstellen
$pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');

// Daten aus der Datenbank abfragen
$stmt = $pdo->prepare('SELECT xid, ip, nickname, hostname, status FROM xclients');
$stmt->execute();
$clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Daten als JSON ausgeben
header('Content-Type: application/json');
echo json_encode($clients);
?>
