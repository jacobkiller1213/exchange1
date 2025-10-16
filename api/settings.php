<?php



header('Content-Type: application/json');

$array = [
    "status" => 200,
    "data" => [
        "settings" => [
            "maintenance" => "no",
            "mobileIsActive" => "Y",
            "contactEmail" => "mail@AsteriChain",
            "contactTelegram" => "AsteriChain",
            "cashIsActive" => "N",
            "maxFileUploadSize" => "8808038"
        ]
    ]
];

echo json_encode($array);