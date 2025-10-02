<?php
require_once 'tools.php';
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);
$id = $data['orderId'];
$time = time();
$format_time = date('H:i', $time);
$array = [
    "status" => 200,
    "data" => [
        "chat" => [
            "exchangeCreatedAt" => $format_time,
            "exchangeUniqid" => $id,
            "unreadMessagesNum" => "0",
            "maxUploadSize" => "8808038"
        ],
        "messages" => [],
        "fastMessages" => [],
        "preparedMessages" => [
            [
                "id" => "1",
                "question" => "Деньги с карты списались, а статус в сделке не поменялся"
            ],
            [
                "id" => "2",
                "question" => "Верифицикация карты"
            ],
            [
                "id" => "3",
                "question" => "Что такое AML проверка"
            ],
            [
                "id" => "4",
                "question" => "Не могу оплатить"
            ],
            [
                "id" => "5",
                "question" => "Отправленная мной сумма отличается от указанной в сделке"
            ],
            [
                "id" => "6",
                "question" => "Сколько ждать подтверждения сети?"
            ],
            [
                "id" => "8",
                "question" => "Другое"
            ]
        ]
    ]
];

echo json_encode($array);
