<?php
require_once 'tools.php';
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);
$id = $data['orderId'];
change_status($id, 'processing');

$array = [
    "status" => 200,
    "data"   => [
        "orderWasConfirmed" => "1"
    ]
];

echo json_encode($array);
