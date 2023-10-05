<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$logFilePath = $_SERVER['DOCUMENT_ROOT'] . '/LOG/HUNT3R_LOGS.txt';
$logContent = file_get_contents($logFilePath);
echo nl2br($logContent);
?>
