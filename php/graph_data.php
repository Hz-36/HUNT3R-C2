<?php
$pdo = new PDO('mysql:host=localhost;dbname=stats', 'hunt3r', 'hunt3r');

$stmt = $pdo->prepare('SELECT date, payloads, infections, clientsactive, sessions FROM infections');
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$labels = [];
$payloads = [];
$infections = [];
$clientsActive = [];
$sessions = [];

foreach ($data as $row) {
    $labels[] = $row['date'];
    $payloads[] = (int) $row['payloads'];
    $infections[] = (int) $row['infections'];
    $clientsActive[] = (int) $row['clientsactive'];
    $sessions[] = (int) $row['sessions'];
}

$response = [
    'labels' => $labels,
    'datasets' => [
        [
            'label' => 'Payloads',
            'data' => $payloads,
            'borderColor' => 'red',
        ],
        [
            'label' => 'Infections',
            'data' => $infections,
            'borderColor' => 'green',
        ],
        [
            'label' => 'Clients Active',
            'data' => $clientsActive,
            'borderColor' => 'blue',
        ],
        [
            'label' => 'Sessions',
            'data' => $sessions,
            'borderColor' => 'purple',
        ],
    ],
];

// Set the content type to JSON
header('Content-Type: application/json');

echo json_encode($response);
?>
