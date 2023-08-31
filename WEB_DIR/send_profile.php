<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $profile = $_POST['profile'];
    $value = $_POST['sliderValue'];

    // Hier kannst du die empfangenen Daten verarbeiten und an das C++-Programm senden

    echo 'Daten erfolgreich gesendet';
} else {
    header('HTTP/1.1 400 Bad Request');
    echo 'Ungültige Anfrage';
}
?>
