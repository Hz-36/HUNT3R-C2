<?php
$pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');

if (isset($_GET['xid'])) {
    $xid = $_GET['xid'];

    // Abfrage, um erweiterte Informationen aus yclients zu erhalten
    $stmt = $pdo->prepare('SELECT * FROM yclients WHERE xid = :xid');
    $stmt->bindParam(':xid', $xid);
    $stmt->execute();
    $clientDetails = $stmt->fetch(PDO::FETCH_ASSOC);

    // Zeige die erweiterten Informationen an
if ($clientDetails) {
    echo '<h2>Client Details</h2>';
    echo '<div class="client-details-container">';
    
    echo '<div class="client-image">';
    echo '<img id="clientImage" src="/pic/' . $xid . '.png" alt="Client Image" width="400" height="200">';
    echo '</div>';
    
    echo '<div class="client-tables">';
    echo '<table class="left-table">';
    // Erste Hälfte der Tabelle
    foreach ($clientDetails as $key => $value) {
        if ($key === 'filex') {
            break;
        }
        echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
    }
    echo '</table>';
    
    echo '<table class="right-table">';
    // Zweite Hälfte der Tabelle
    $split = false;
    foreach ($clientDetails as $key => $value) {
        if ($key === 'filex') {
            $split = true;
            continue;
        }
        if ($split) {
            echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
        }
    }
    echo '</table>';
    
    echo '</div>'; // Ende der client-tables
    echo '</div>'; // Ende der client-details-container
} else {
    echo '<h2>Client Details</h2>';
    echo 'Client not found.';
}
}
?>

