<?php
$pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');

if (isset($_POST['xid'])) {
    $xid = $_POST['xid'];
    
    // Lösche den Client mit der gegebenen xid
    $stmt = $pdo->prepare('DELETE FROM xclients WHERE xid = :xid');
    $stmt->bindParam(':xid', $xid);
    
    if ($stmt->execute()) {
        // Erfolgreich gelöscht
        echo 'Client successfully deleted.';
    } else {
        // Fehler beim Löschen
        echo 'Error deleting client.';
    }
} else {
    // xid wurde nicht übergeben
    echo 'xid not provided.';
}
echo '<script>showPopup();</script>';
?>

