<?php
$logFilePath = 'LOG/HUNT3R_LOGS.txt';
$logContent = file_get_contents($logFilePath);
echo nl2br($logContent);
?>