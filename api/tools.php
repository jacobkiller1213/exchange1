<?php
require_once 'config.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
function generateRealisticMinAmount($currencyCode) {
    // Базовые минимальные суммы для разных типов валют
    $minAmounts = json_decode(file_get_contents('currency_codes.json'), true);



    // Если код валюты не найден, используем значения по умолчанию
    $config = null;

    foreach ($minAmounts as $currency) {
        if (isset($currency['best_code']) && $currency['best_code'] === $currencyCode) {
            $config = [
                'min' => $currency['min_amount'] ?: 10000,
                'max' => $currency['max_amount'] ?: 500000,

            ];

            break;
        }
    }

    // Если не нашли, используем значения по умолчанию
    if ($config === null) {

        if ($config === null) {
            $config = [
                'min' => 10000,
                'max' => 500000,

            ];
        }
    }




    return [
        'min_amount' => $config['min'],
        'max_amount' => $config['max']
    ];
}




function calculate($curr_from, $curr_to, $amount_from, $amount_to) {
    $url = API_URL . 'calculate';
    $data = [
        'exchanger_id' => exchange_id,
        'currency_from' => $curr_from,
        'currency_to' => $curr_to,
        'amount_from' => $amount_from,
        'amount_to' => $amount_to,
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json',
        'User-Agent: ExchangeApp/1.0',
        'Connection: keep-alive'
    ]);

    // Выполняем запрос
    $response = curl_exec($ch);

    // Получаем информацию о запросе


    curl_close($ch);

    return json_decode($response, true);
}


function create($data){
    $url = API_URL . 'create_order';

    // Получаем IP пользователя с учетом Cloudflare
    $user_ip = $_SERVER["HTTP_CF_CONNECTING_IP"] ??
               $_SERVER['HTTP_X_FORWARDED_FOR'] ??
               $_SERVER['HTTP_CLIENT_IP'] ??
               $_SERVER['REMOTE_ADDR'];

    // Если IP содержит несколько адресов, берем первый
    if(strpos($user_ip, ',') !== false) {
        $ips = explode(',', $user_ip);
        $user_ip = trim($ips[0]);
    }
    $data = [
        'exchanger_id' => exchange_id,
        'currency_from' => $data['currency_from'],
        'currency_to' => $data['currency_to'],
        'amount_from' => $data['amount_from'],
        'amount_to' => $data['amount_to'],
        'payment_info' => json_encode($data['payment_info']),
        'description' => json_encode($data['description']) ?? null,
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json',
        'User-Agent: ExchangeApp/1.0',
        'Connection: keep-alive',
        'X-Forwarded-For: ' . $user_ip ?? null,
        'X-Real-IP: ' . $user_ip ?? null,
    ]);

    $response = curl_exec($ch);
    return json_decode($response, true);
}


function get_order($id){
    $url = API_URL . 'get_order/'.$id;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json',
        'User-Agent: ExchangeApp/1.0',
        'Connection: keep-alive'
    ]);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}




function get_currencies(){
    $currencies_json = file_get_contents(__DIR__ . '/currencies.json');
    $currencies_data = json_decode($currencies_json, true);

    if (isset($currencies_data['data']['currencies'])) {
        return $currencies_data['data']['currencies'];
    }

    return [];
}


function get_currency_full($currency_code){

    $currencies = get_currencies();

    foreach ($currencies as $currency) {

        if ($currency['best_code'] === $currency_code) {
            return $currency;
        }
    }
    return null;
}


function change_status($id, $status){
    $url = API_URL . 'change_order_status/'.$id;
    $data = [
        'status' => $status
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json',
        'User-Agent: ExchangeApp/1.0',
        'Connection: keep-alive'
    ]);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

function format_status($status){
    switch ($status) {
        case 'created':
            return ['raw_status' => 'new', 'status_text' => 'В обработке', 'status' => 'waiting_for_payment'];
        case 'processing':
            return ['raw_status' => 'processing', 'status_text' => 'Ожидаем вашей оплаты', 'status' => 'waiting_for_payment'];
        case 'paid':
            return ['raw_status' => 'paid', 'status_text' => 'Ожидаем подтверждения', 'status' => 'waiting_for_payment'];
        case 'completed':
            return ['raw_status' => 'completed', 'status_text' => 'Завершено', 'status' => 'completed'];
        case 'deleted':
            return 'deleted';

    }
}



function get_rates($rates){
    $url = API_URL . '/rates/get';
    $data = [
        'rates' => $rates
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json',
        'User-Agent: ExchangeApp/1.0',
        'Connection: keep-alive'
    ]);

    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}
function get_min_amount($currency_code){
    $url = API_URL . 'get_min_amount/'.exchange_id.'/'.$currency_code;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json',
        'User-Agent: ExchangeApp/1.0',
        'Connection: keep-alive'
    ]);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}
