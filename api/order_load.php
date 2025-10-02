<?php
require_once 'tools.php';
require_once 'config.php';
header('Content-Type: application/json');
$data = file_get_contents('php://input');
$data = json_decode($data, true);


$curr_from = $data['order']['сurr_from'];
$curr_to = $data['order']['сurr_to'];
$rate_id = $data['rateId'] ?? rand(1, 1000000);
if($curr_from['type'] == 'fiat'){
    $curr_from['best_code'] = 'RUB';
}
if($curr_to['type'] == 'fiat'){
    $curr_to['best_code'] = 'RUB';
}

$calculate = calculate($curr_from['best_code'], $curr_to['best_code'], 1, "");
$info_min_amount_from = get_min_amount($curr_from['best_code']);

$info_min_amount_to = get_min_amount($curr_to['best_code']);
$tags_arr = [];
if (!empty($curr_to['tag_type']) && $curr_to['tag_type'] === 'ID') {
    $tags_arr = [
        "Memo-id",
    ];
}

$jayParsedAry = [
    "status" => 200,
    "data" => [
        "rate" => [
            "id" => $rate_id,
            "url" =>  "https://" . $_SERVER['HTTP_HOST'] . "/?from=" . $curr_from['best_code'] . "&to=" . $curr_to['best_code'],
            "active" => "Y",
            "currency_from" => $curr_from['id'],
            "currency_to" => $curr_to['id'],
            "type" => "",
            "tag" => $tags_arr,
            "f_course_from" => rtrim(rtrim(number_format($calculate['data']['amount_from'], 10, '.', ' '), '0'), '.'),
            "f_course_to" => rtrim(rtrim(number_format($calculate['data']['amount_to'], 10, '.', ' '), '0'), '.'),
            "f_maxamount_from" => $info_min_amount_from,
            "f_maxamount_to" => $info_min_amount_to,
            "f_minamount_from" => $info_min_amount_from,
            "f_minamount_to" => $info_min_amount_to,
            "forced_floating_course" => "N",
            "f_balance" => "0.19844073",
            "reverseRateExists" => "Y",
            "url_currency_from_code" => $curr_from['best_code'],
            "url_currency_to_code" => $curr_to['best_code'],
            "isNeedVerificationForIncomingPay" => "N",
            "isNeedVerificationPhoneForIncomingPay" => "Y",
            "seo_rate_code" => "",
            "seo_h1" => "Купить " . $curr_from['name'] . " за " . $curr_to['name']
        ],
        "order" => [
            "orderToken" => "8b9e5b291defdeabf027a33b183811dce77d2065f6d92f8f22b83894e58d",
            "rateTimeout" => "30",
            "email" => "",
            "wallet" => "",
            "sumTo" => $data['order']['sumTo'],
            "sumFrom" => $data['order']['sumFrom'],
            "sumFromFee" => "",
            "amlWarning" => "Y",
            "amlWarningNotify" => "",
            "comission" => "",
            "oldMinAmount" => "",
            "tagType" => "",
            "showBeneficiary" => "",
            "showCustomer" => "",
            "userId" => "",
            "seoRateCode" => "",
            "queryHash" => "d984b6912dd6e96c96602c6f964974",
            "isRepeatedFromOrder" => "",
            "currencyToIsSbp" => "N",
            "canProvideAdditionalSbpRequisites" => "N",
            "errors" => []
        ]
    ]
];

echo json_encode($jayParsedAry);
