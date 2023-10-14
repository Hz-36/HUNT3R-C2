<?php
    $pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');

    $stmt = $pdo->prepare('SELECT xid, ip, nickname, hostname, status FROM xclients');
    $stmt->execute();
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output -> JSON ausgeben
    header('Content-Type: application/json');
    echo json_encode($clients);
?>
