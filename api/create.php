<?php
include 'tools.php';
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);
$payment_info = [];
$currency_from = $data['order']['сurr_from'];
$currency_to = $data['order']['сurr_to'];
if(!preg_match('/'.$currency_to['address_regex'].'/', $data['order']['wallet'])){
    $arr = [
        "status" => 500,
        "error" => [
            "code" => "incorrect_wallet",
            "message" => "Invalid wallet address"
        ]
    ];
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode($arr);
    exit;
}


if (!empty($data['order']['bank'])) {
    $payment_info['💳 Метод оплаты'] = $data['order']['bank'];
}

if (!empty($data['order']['wallet'])) {
    $payment_info['💼 Адрес кошелька'] = $data['order']['wallet'];
}

if (!empty($data['order']['tag'])) {
    $payment_info['⚠️ МЕМО'] = $data['order']['tag'];
}

$description = [];
if (!empty($data['order']['email'])) {
    $description['📧 Email'] = $data['order']['email'];
}
if (!empty($data['order']['clientPhoneNumber'])) {
    $description['📱 Номер телефона'] = $data['order']['clientPhoneNumber'];
    $blocked_prefixes = ['+1', '+39', '+38', '+49', '+44', '+65', '+81', '+82', '+972', '+971', '1', '39', '38', '49', '44', '65', '81', '82', '972', '971'];
    $phone_blocked = false;

    foreach ($blocked_prefixes as $prefix) {
        if (strpos($data['order']['clientPhoneNumber'], $prefix) === 0) {
            $phone_blocked = true;
            break;
        }
    }

    if ($phone_blocked) {
        $arr = [
            "status" => 500,
            "error" => [
                "code" => "blocked_phone_number",
                "message" => "Номера телефонов с данным кодом страны не принимаются"
            ]
        ];
        header('HTTP/1.1 500 Internal Server Error');
        echo json_encode($arr);
        exit;
    }
}
if (!empty($data['order']['name'])) {
    $description['👤 Имя'] = $data['order']['name'];
}
$dataCreate = [
    'currency_from' => $data['order']['сurr_from']['best_code'],
    'currency_to' => $data['order']['сurr_to']['best_code'],
    'amount_from' => $data['order']['sumFrom'],
    'amount_to' => $data['order']['sumTo'],
    'payment_info' => $payment_info,
    'description' => $description,
];

$info_min_amount_from = get_min_amount($currency_from['best_code']);

$info_min_amount_to = get_min_amount($currency_to['best_code']);
$errors = [];

if ($data['order']['sumFrom'] && $info_min_amount_from > $data['order']['sumFrom']) {

    echo json_encode([
        "status" => 500,
        "error" => [
            "code" => "order_creation_error",
            "message" => "Сумма должна быть больше " . $info_min_amount_from
        ]
    ]);
    exit;
}

if ($data['order']['sumTo'] && $info_min_amount_to > $data['order']['sumTo']) {
    echo json_encode([
        "status" => 500,
        "error" => [
            "code" => "order_creation_error",
            "message" => "Сумма должна быть больше " . $info_min_amount_to
        ]
    ]);

    exit;
}
$order = create($dataCreate)['data'];






$token = "SKzS8yO7FkFZDgwetxTv9OiR3WYKsWM0FHCvbjwytnGFNi2k+3e4/MrfkBoPVt+XS+ZR8VHfukAsJFKfL83gGc9aC+hFJjNcWkAg4E4SZBmmLb/g1HAhMFgWP+I=";

$array = [
	"status" => 200,
	"data"   => [
		"orderId"     =>  (string)$order['id'],
		"accessToken" => $token,
		"url"         => "https://" . $_SERVER['HTTP_HOST'] ."/order/". (string)$order['id']
	]
];


echo json_encode($array);











?>