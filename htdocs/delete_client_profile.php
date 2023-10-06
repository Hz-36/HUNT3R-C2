<?php
    // Verbindung zur Datenbank herstellen
    $pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');

    // Überprüfen, ob eine xid in der URL übergeben wurde
    if (isset($_GET['xid'])) {
        // xid aus der URL abrufen
        $xid = $_GET['xid'];

        // SQL-Statement zum Löschen des Profils mit der angegebenen xid
        $stmt = $pdo->prepare('DELETE FROM xclients WHERE xid = :xid');
        $stmt->bindParam(':xid', $xid);

        // Versuche, das Profil zu löschen
        if ($stmt->execute()) {
            $deleteSuccessMessage = 'Profil erfolgreich gelöscht.';
        } else {
            $deleteErrorMessage = 'Fehler beim Löschen des Profils.';
        }
    } else {
        $deleteErrorMessage = 'Keine xid angegeben.';
    }
?>
