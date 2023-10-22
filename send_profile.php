<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $profile = $_POST['profile'];
        $value = $_POST['sliderValue'];

        echo 'Profile Send Successfully';
    } else {
        header('HTTP/1.1 400 Bad Request');
        echo 'ERROR x105 Bad Request';
    }
?>
