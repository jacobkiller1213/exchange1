<?php

require_once 'tools.php';
header('Content-Type: application/json');

$data = file_get_contents('php://input');
$data = json_decode($data, true);

$curr_from = $data['order']['сurr_from'];
$curr_to = $data['order']['сurr_to'];
$rate_id = $data['rateId'];

$info_min_amount_from = get_min_amount($curr_from['best_code']);

$info_min_amount_to = get_min_amount($curr_to['best_code']);
$errors = [];

if ($data['order']['sumFrom'] && $info_min_amount_from > $data['order']['sumFrom']) {
    $errors[] = [
        "sumFrom" => "Сумма должна быть больше " . $info_min_amount_from
    ];
}

if ($data['order']['sumTo'] && $info_min_amount_to > $data['order']['sumTo']) {
    $errors[] = [
        "sumTo" => "Сумма должна быть больше " . $info_min_amount_to
    ];
}



$sum_from = $data['order']['sumFrom'];
$sum_to = $data['order']['sumTo'];
if($curr_from['type'] == 'fiat'){
    $curr_from['best_code'] = 'RUB';
}
if($curr_to['type'] == 'fiat'){
    $curr_to['best_code'] = 'RUB';
}
$calculate = calculate($curr_from['best_code'], $curr_to['best_code'], $sum_from, $sum_to)['data'];


$data_response = [
    "status" => 200,
    "data" => [
        "order" => [
            "orderToken" => "6de435798be5282427d36039928966a1c2588fb557701b5c35a3b57b88a2",
            "rateTimeout" => "30",
            "sumTo" => $calculate['amount_to'],
            "sumFrom" => $calculate['amount_from'],
            "errors" => $errors,
            'spread' => $calculate['spread_percentage']
        ]
    ]
];

echo json_encode($data_response);

