<?php
require_once __DIR__ . '/api/tools.php';
// Получаем order_id из URL
error_reporting(E_ALL);
ini_set('display_errors', 1);
$order_id = isset($_GET['order_id']) ? $_GET['order_id'] : '';


if (empty($order_id) || !is_numeric($order_id)) {

    header('Location: /');
    exit;
}



$order_data = get_order($order_id);

$currency_from = get_currency_full($order_data['currency_from']);
$currency_to = get_currency_full($order_data['currency_to']);
?>

<html lang="ru">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="icon" href="/favicon.png" />
    <title>Сделка</title>

    <link href="/css/app.f62af7d1.css?v=<?= time() ?>" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="/css/845.253fa153.css" />

</head>

<body cz-shortcut-listen="true">
    <noscript>
        <strong>We're sorry but BixBite doesn't work properly without JavaScript
            enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app" data-v-app="">

        <div class="overlay"></div>
        <header class="header">
            <div class="header__mob-info">Рабочее время: 10:00 - 22:00 GMT+3</div>
            <div class="wrap">
                <div class="header__box">
                    <div onclick="toggleBurger()" class="header__burger"><svg width="20px" height="20px" class="icon" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="base-icon">
                            <path opacity="0.5" d="M1 2H19M13.2727 9H1M1 16H19" stroke="#2E4057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></div><a href="/" class="header__logo">

                        <svg class='icon-logo' viewBox="0 0 123 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.981534 28V1.81818H11.8991C13.8594 1.81818 15.5 2.09517 16.821 2.64915C18.1506 3.20312 19.1477 3.97869 19.8125 4.97585C20.4858 5.97301 20.8224 7.12784 20.8224 8.44034C20.8224 9.4375 20.6136 10.3281 20.196 11.1122C19.7784 11.8878 19.2031 12.5312 18.4702 13.0426C17.7372 13.554 16.8892 13.9119 15.9261 14.1165V14.3722C16.983 14.4233 17.9588 14.7088 18.8537 15.2287C19.7571 15.7486 20.4815 16.473 21.027 17.402C21.5724 18.3224 21.8452 19.4134 21.8452 20.6747C21.8452 22.081 21.4872 23.3381 20.7713 24.446C20.0554 25.5455 19.0199 26.4148 17.6648 27.054C16.3097 27.6847 14.6648 28 12.7301 28H0.981534ZM7.30966 22.8991H11.2216C12.5938 22.8991 13.6037 22.6392 14.2514 22.1193C14.9077 21.5994 15.2358 20.875 15.2358 19.946C15.2358 19.2727 15.0781 18.6932 14.7628 18.2074C14.4474 17.7131 14 17.3338 13.4205 17.0696C12.8409 16.7969 12.1463 16.6605 11.3366 16.6605H7.30966V22.8991ZM7.30966 12.5824H10.8125C11.5028 12.5824 12.1165 12.4673 12.6534 12.2372C13.1903 12.0071 13.608 11.6747 13.9062 11.2401C14.2131 10.8054 14.3665 10.2812 14.3665 9.66761C14.3665 8.78977 14.0554 8.09943 13.4332 7.59659C12.8111 7.09375 11.9716 6.84233 10.9148 6.84233H7.30966V12.5824Z" fill="#FF7734" />
                            <path d="M24.8878 28V8.36364H31.1392V28H24.8878ZM28.0199 6.07528C27.142 6.07528 26.3878 5.78551 25.7571 5.20597C25.1264 4.6179 24.8111 3.91051 24.8111 3.08381C24.8111 2.26562 25.1264 1.56676 25.7571 0.987216C26.3878 0.399147 27.142 0.105112 28.0199 0.105112C28.9063 0.105112 29.6605 0.399147 30.2827 0.987216C30.9134 1.56676 31.2287 2.26562 31.2287 3.08381C31.2287 3.91051 30.9134 4.6179 30.2827 5.20597C29.6605 5.78551 28.9063 6.07528 28.0199 6.07528ZM40.4364 8.36364L43.6708 14.8324L47.0202 8.36364H53.3228L47.8384 18.1818L53.5273 28H47.2759L43.6708 21.4801L40.1552 28H33.8143L39.516 18.1818L34.0955 8.36364H40.4364ZM56.1768 28V1.81818H67.0945C69.0547 1.81818 70.6953 2.09517 72.0163 2.64915C73.3459 3.20312 74.343 3.97869 75.0078 4.97585C75.6811 5.97301 76.0178 7.12784 76.0178 8.44034C76.0178 9.4375 75.8089 10.3281 75.3913 11.1122C74.9737 11.8878 74.3984 12.5312 73.6655 13.0426C72.9325 13.554 72.0845 13.9119 71.1214 14.1165V14.3722C72.1783 14.4233 73.1541 14.7088 74.049 15.2287C74.9524 15.7486 75.6768 16.473 76.2223 17.402C76.7678 18.3224 77.0405 19.4134 77.0405 20.6747C77.0405 22.081 76.6825 23.3381 75.9666 24.446C75.2507 25.5455 74.2152 26.4148 72.8601 27.054C71.505 27.6847 69.8601 28 67.9254 28H56.1768ZM62.505 22.8991H66.4169C67.7891 22.8991 68.799 22.6392 69.4467 22.1193C70.103 21.5994 70.4311 20.875 70.4311 19.946C70.4311 19.2727 70.2734 18.6932 69.9581 18.2074C69.6428 17.7131 69.1953 17.3338 68.6158 17.0696C68.0362 16.7969 67.3416 16.6605 66.532 16.6605H62.505V22.8991ZM62.505 12.5824H66.0078C66.6982 12.5824 67.3118 12.4673 67.8487 12.2372C68.3857 12.0071 68.8033 11.6747 69.1016 11.2401C69.4084 10.8054 69.5618 10.2812 69.5618 9.66761C69.5618 8.78977 69.2507 8.09943 68.6286 7.59659C68.0064 7.09375 67.1669 6.84233 66.1101 6.84233H62.505V12.5824ZM80.0831 28V8.36364H86.3345V28H80.0831ZM83.2152 6.07528C82.3374 6.07528 81.5831 5.78551 80.9524 5.20597C80.3217 4.6179 80.0064 3.91051 80.0064 3.08381C80.0064 2.26562 80.3217 1.56676 80.9524 0.987216C81.5831 0.399147 82.3374 0.105112 83.2152 0.105112C84.1016 0.105112 84.8558 0.399147 85.478 0.987216C86.1087 1.56676 86.424 2.26562 86.424 3.08381C86.424 3.91051 86.1087 4.6179 85.478 5.20597C84.8558 5.78551 84.1016 6.07528 83.2152 6.07528ZM101.397 8.36364V12.9659H89.0096V8.36364H101.397ZM91.6048 3.65909H97.8562V21.8253C97.8562 22.2088 97.9158 22.5199 98.0352 22.7585C98.163 22.9886 98.3462 23.1548 98.5849 23.2571C98.8235 23.3509 99.109 23.3977 99.4414 23.3977C99.68 23.3977 99.9315 23.3764 100.196 23.3338C100.468 23.2827 100.673 23.2401 100.809 23.206L101.755 27.7188C101.457 27.804 101.035 27.9105 100.49 28.0384C99.9528 28.1662 99.3093 28.2472 98.5593 28.2812C97.0934 28.3494 95.8363 28.179 94.788 27.7699C93.7482 27.3523 92.9513 26.7045 92.3974 25.8267C91.8519 24.9489 91.5877 23.8452 91.6048 22.5156V3.65909ZM113.555 28.3707C111.501 28.3707 109.728 27.9659 108.237 27.1562C106.754 26.3381 105.612 25.1747 104.811 23.6662C104.018 22.1491 103.622 20.3466 103.622 18.2585C103.622 16.2301 104.022 14.4574 104.824 12.9403C105.625 11.4148 106.754 10.2301 108.211 9.38636C109.669 8.53409 111.386 8.10795 113.363 8.10795C114.761 8.10795 116.039 8.32528 117.199 8.75994C118.358 9.1946 119.359 9.83807 120.203 10.6903C121.047 11.5426 121.703 12.5952 122.172 13.848C122.64 15.0923 122.875 16.5199 122.875 18.1307V19.6903H105.808V16.0597H117.058C117.049 15.3949 116.892 14.8026 116.585 14.2827C116.278 13.7628 115.856 13.358 115.319 13.0682C114.791 12.7699 114.181 12.6207 113.491 12.6207C112.792 12.6207 112.166 12.7784 111.612 13.0938C111.058 13.4006 110.619 13.8224 110.295 14.3594C109.971 14.8878 109.801 15.4886 109.784 16.1619V19.8565C109.784 20.6577 109.941 21.3608 110.257 21.9659C110.572 22.5625 111.02 23.027 111.599 23.3594C112.179 23.6918 112.869 23.858 113.67 23.858C114.224 23.858 114.727 23.7812 115.179 23.6278C115.63 23.4744 116.018 23.2486 116.342 22.9503C116.666 22.652 116.909 22.2855 117.071 21.8509L122.811 22.017C122.572 23.304 122.048 24.4247 121.238 25.3793C120.437 26.3253 119.385 27.0625 118.081 27.5909C116.777 28.1108 115.268 28.3707 113.555 28.3707Z" fill="#2F3F57" />
                        </svg>



                    </a><button type="button" class="header__support"><svg width="20px" height="20px" class="icon-chat" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="base-icon">
                            <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M17.3022 9.38333V13.6006C17.3022 14.7052 16.4067 15.6006 15.3022 15.6006H14.4684V18.0011C14.4684 18.3799 14.2544 18.7261 13.9156 18.8955C13.5768 19.0649 13.1714 19.0284 12.8684 18.8011L8.60111 15.6006H2C0.89543 15.6006 0 14.7052 0 13.6006V4.26569C0 3.16112 0.89543 2.26569 2 2.26569H9.34977C9.09782 2.88529 8.95233 3.55952 8.936 4.26569H2V13.6006L8.93445 13.6006C9.15082 13.6006 9.36135 13.6708 9.53445 13.8006L12.4684 16.0011V14.6006C12.4684 14.0483 12.9161 13.6006 13.4684 13.6006L15.3022 13.6006V10.0239C16.0188 9.93556 16.6941 9.71346 17.3022 9.38333Z" fill="#2E4057"></path>
                            <circle cx="14.6019" cy="4.39926" r="3.40048" fill="#00AF92"></circle>
                        </svg></button>
                    <div class="header__info">Рабочее время: 10:00 - 22:00 GMT+3</div>
                    <div class="header__nav"><a href="/about" class="header__nav-link">О нас</a><a href="/partners" class="header__nav-link">Партнерам</a><a href="/faq" class="header__nav-link">FAQ</a><a href="/contacts" class="header__nav-link">Контакты</a><a href="/agreement" class="header__nav-link">Правила сервиса</a><a class="header__nav-link --support" type="button" href="https://t.me/BixBite_com" target="_blank"><svg class="icon-chat" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="base-icon">
                                <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M17.3022 9.38333V13.6006C17.3022 14.7052 16.4067 15.6006 15.3022 15.6006H14.4684V18.0011C14.4684 18.3799 14.2544 18.7261 13.9156 18.8955C13.5768 19.0649 13.1714 19.0284 12.8684 18.8011L8.60111 15.6006H2C0.89543 15.6006 0 14.7052 0 13.6006V4.26569C0 3.16112 0.89543 2.26569 2 2.26569H9.34977C9.09782 2.88529 8.95233 3.55952 8.936 4.26569H2V13.6006L8.93445 13.6006C9.15082 13.6006 9.36135 13.6708 9.53445 13.8006L12.4684 16.0011V14.6006C12.4684 14.0483 12.9161 13.6006 13.4684 13.6006L15.3022 13.6006V10.0239C16.0188 9.93556 16.6941 9.71346 17.3022 9.38333Z" fill="#2E4057"></path>
                                <circle cx="14.6019" cy="4.39926" r="3.40048" fill="#00AF92"></circle>
                            </svg> Поддержка</a></div>
                </div>
            </div>
        </header>

        <main class="main">
            <section class="inner-page">
                <div class="wrap">
                    <div>
                        <h1 class="inner-page__title">
                            Заказ
                            <?php echo $order_id; ?>
                        </h1>
                        <div class="inner-page__content">
                            <div class="order">

                                <div class="inform__ex">
                                    <div class="inform__ex-item">
                                        <span class="inform__ex-name">
                                            <?php echo $currency_from['name']; ?>
                                        </span><img class="inform__ex-logo" src="<?php echo $currency_from['icon_url']; ?>" alt="valet" /><span class="inform__ex-price">
                                            <?php echo $order_data['amount_from']; ?>
                                            <?php echo $currency_from['name']; ?>
                                        </span>
                                    </div>
                                    <svg width="10px" height="10px" class="icon" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="base-icon">
                                        <path d="M13 1L7 7L1 0.999999" stroke="#2E4057" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div class="inform__ex-item">
                                        <span class="inform__ex-name">
                                            <?php echo $currency_to['name']; ?>
                                        </span><img class="inform__ex-logo" src="<?php echo $currency_to['icon_url']; ?>" alt="valet" /><span class="inform__ex-price">
                                            <?php echo $order_data['amount_to']; ?>
                                            <?php echo $currency_to['name']; ?>
                                        </span>
                                    </div>

                                </div>
                                <div class="step__info">
                                    <?php if ($order_data['status'] === 'created'): ?>
                                        <p><strong>Статус сделки:</strong> Ожидаем вашей оплаты</p>
                                    <?php elseif ($order_data['status'] === 'processing' || $order_data['status'] === 'paid'): ?>
                                        <p><strong>Статус сделки:</strong> Ожидаем подтверждение транзакции</p>

                                    <?php endif; ?>

                                </div>
                                <div class="order__info">

                                    <div class="order__info-text">
                                        <strong>Курс зафиксирован на 30 минут</strong><br />Если в
                                        течение этого времени не будут получены денежные средства
                                        от вас, то сделка отменится.
                                    </div>
                                </div>
                                <div class="order__list">
                                    <?php if ($order_data['status'] !== 'suspended' && $order_data['status'] !== 'completed' && $order_data['status'] !== 'deleted'): ?>
                                        <div class="order__item step active">
                                            <div class="step__title">
                                                <span>Оплата сделки</span>
                                            </div>
                                            <?php if ($order_data['status'] === 'created'): ?>
                                                <div class="step__box">
                                                    <div class="step__wrap">
                                                        <div class="step__inform-status mt-none">
                                                            <div class="loader balls-02">
                                                                <div class="loader-container">
                                                                    <div class="ball"></div>
                                                                    <div class="ball"></div>
                                                                    <div class="ball"></div>
                                                                    <div class="ball"></div>
                                                                </div>
                                                            </div>
                                                            <div class="step__inform-text">
                                                                Для вас зарезервирован уникальный кошелек для
                                                                оплаты сделки. <br />Вы будете
                                                                <b>автоматически перенаправлены</b> на следующий
                                                                шаг сделки как только средства поступят по
                                                                выданным реквизитам
                                                            </div>

                                                        </div>
                                                        <div class="step__content">
                                                            <div class="step__fields">
                                                                <div class="step__fields-item">
                                                                    <div class="step__fields-header">
                                                                        <label class="step__fields-label">Переводите</label>
                                                                    </div>
                                                                    <div class="step__fields-wrap">
                                                                        <img class="step__valet" src="<?php echo $currency_from['icon_url']; ?>" />
                                                                        <div class="step__field">
                                                                            <?php echo $order_data['amount_from']; ?>
                                                                            <?php echo $currency_from['iso_code']; ?>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="step__fields-item">
                                                                    <div class="step__fields-header">
                                                                        <label class="step__fields-label">на кошелек</label>
                                                                    </div>
                                                                    <div class="step__fields-wrap">

                                                                        <div class="step__field">
                                                                            <?php echo $order_data['wallet_address']; ?>
                                                                        </div>

                                                                        <svg width="24px" height="24px" class="icon-valet" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="base-icon">
                                                                            <path opacity="0.5" d="M6 11.8462V28C6 28.5523 6.44772 29 7 29H28.3333C28.8856 29 29.3333 28.5523 29.3333 28V23M6 11.8462H13.3333H25M6 11.8462V9C6 8.44772 6.44772 8 7 8H25V11.8462M25 11.8462H28.3333C28.8856 11.8462 29.3333 12.2939 29.3333 12.8462V18M29.3333 18H30C30.5523 18 31 18.4477 31 19V22C31 22.5523 30.5523 23 30 23H29.3333M29.3333 18H24.3333C23.781 18 23.3333 18.4477 23.3333 19V22C23.3333 22.5523 23.781 23 24.3333 23H29.3333" stroke="#9F9F9F" stroke-width="2"></path>
                                                                        </svg>

                                                                    </div>
                                                                </div>
                                                                <?php if (isset($order_data['memo']) && $order_data['memo'] !== ''): ?>
                                                                    <div class="step__fields-item">
                                                                        <div class="step__fields-header">
                                                                            <label class="step__fields-label">Memo</label>
                                                                        </div>
                                                                        <div class="step__fields-wrap">
                                                                            <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                                <g id="SVGRepo_iconCarrier">
                                                                                    <path d="M12 17.75C12.4142 17.75 12.75 17.4142 12.75 17V11C12.75 10.5858 12.4142 10.25 12 10.25C11.5858 10.25 11.25 10.5858 11.25 11V17C11.25 17.4142 11.5858 17.75 12 17.75Z" fill="#9F9F9F"></path>
                                                                                    <path d="M12 7C12.5523 7 13 7.44772 13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7Z" fill="#9F9F9F"></path>
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 12C1.25 6.06294 6.06294 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12ZM12 2.75C6.89137 2.75 2.75 6.89137 2.75 12C2.75 17.1086 6.89137 21.25 12 21.25C17.1086 21.25 21.25 17.1086 21.25 12C21.25 6.89137 17.1086 2.75 12 2.75Z" fill="#9F9F9F"></path>
                                                                                </g>
                                                                            </svg>

                                                                            <div class="step__field">
                                                                                <?php echo $order_data['memo']; ?>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="step__inform">
                                                            <div class="step__inform-text">
                                                                <div class="step__inform-create">
                                                                    <strong>Если вы выводите монеты с биржи Binance,
                                                                        Huobi и др., выберите сеть
                                                                        <span><?php echo $currency_from['name']; ?></span></strong>
                                                                </div>

                                                                <p>
                                                                    В последнее время участились случаи
                                                                    мошенничества. Если вы указывайте не свой личный
                                                                    кошелёк, а кошелёк сторонних лиц (Инвестиционных
                                                                    экспертов, других обменных сервисов, брокеров
                                                                    и.т. д) убедитесь, что это не мошенники,
                                                                    почитайте отзывы в интернете, иначе вы рискуйте
                                                                    потерять свои средства.
                                                                </p>
                                                                <p>
                                                                    Обращаем ваше внимание на то, что сервис
                                                                    BixBite не принимает средства с
                                                                    высокорискованных источников. Каждая входящая
                                                                    транзакция проходит проверку через независимый
                                                                    AML сервис. В случае если транзакция имеет более
                                                                    70% риска, такие платежи будут приостановлены. И
                                                                    после прохождения верификации личности они будут
                                                                    вам возвращены за вычетом комиссии сети! Обмен
                                                                    таких средств невозможен!<br />
                                                                    Если вы хотите заранее узнать потенциальный риск
                                                                    вашей транзакции, то можете воспользоваться
                                                                    одним из сервисов наших партнеров. Первая
                                                                    проверка будет бесплатна. Чтобы проверить свой
                                                                    кошелек на чистоту, вам нужно перейти на сайт
                                                                    <a href="https://getblock.net/?referral=FguQdFg8S8da7EtbkShZqWs9JIGXmUUf" target="_blank">GetBlock.net</a>
                                                                </p>

                                                            </div>
                                                        </div>
                                                        <div class="step__footer">
                                                            <a href="/" class="step__cancel">
                                                                <svg width="10px" height="10px" class="icon-cancel" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="base-icon">
                                                                    xmlns="http://www.w3.org/2000/svg"&gt;
                                                                    <path clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L5 3.58579L8.29289 0.292893C8.68342 -0.0976311 9.31658 -0.0976311 9.70711 0.292893C10.0976 0.683417 10.0976 1.31658 9.70711 1.70711L6.41421 5L9.70711 8.29289C10.0976 8.68342 10.0976 9.31658 9.70711 9.70711C9.31658 10.0976 8.68342 10.0976 8.29289 9.70711L5 6.41421L1.70711 9.70711C1.31658 10.0976 0.683417 10.0976 0.292893 9.70711C-0.0976311 9.31658 -0.0976311 8.68342 0.292893 8.29289L3.58579 5L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z">
                                                                    </path>
                                                                </svg>
                                                                Отменить сделку</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="order__item step <?php echo $order_data['status'] !== 'created' ? 'active' : ''; ?>" style="<?php echo $order_data['status'] === 'processing' ? 'margin-top: 30px !important' : ''; ?>">


                                            <div class="step__title" style="<?= $order_data['status'] === 'paid' || $order_data['status'] === 'completed' ? 'margin: 30px 0px !important' : '' ?> ">
                                                <span>Обработка платежа</span>
                                            </div>
                                            <?php if ($order_data['status'] == 'processing' || $order_data['status'] == 'created'): ?>
                                                <?php if ($order_data['status'] == 'created'): ?>
                                                    <div class="step__box">
                                                        <div class="step__wrap">
                                                            <div class="step__inform mt-none">
                                                                <div class="step__inform-text">
                                                                    <p>
                                                                        После того как вы отправите свой платеж, наш
                                                                        робот автоматически увидит вашу транзакцию. Вам
                                                                        не нужно никуда нажимать или писать в поддержку.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="step__box">
                                                        <div class="step__wrap">
                                                            <div class="step__inform mt-none">
                                                                <div class="step__inform-text">
                                                                    <p>
                                                                        <strong>Мы увидели вашу транзакцию</strong><br>
                                                                        Пожалуйста, ожидайте подтверждения сети
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>





                                </div>

                                <div class="order__item step <?php echo $order_data['status'] == 'completed' || $order_data['status'] === 'paid' ? 'active' : ''; ?>">
                                    <div class="step__title">
                                        <span>Перевод</span>
                                    </div>
                                    <div class="step__box last-step">
                                        <div class="step__wrap">

                                            <div class="step__wrap">
                                                <?php if ($order_data['status'] !== 'completed'): ?>
                                                    <div class="step__inform mt-none">
                                                        <div class="step__inform-text">
                                                            <p>
                                                                <?php if ($order_data['status'] === 'paid'): ?>
                                                                    Мы получили ваш платеж, теперь наша система начала процесс перевода вам ваших средств
                                                                <?php else: ?>
                                                                    После того как мы получим ваш платеж, наша система сразу же переведет вам ваши средства
                                                                <?php endif; ?>
                                                            </p>
                                                        </div>
                                                        <div class="step__inform-resalt">

                                                            Мы переведем
                                                            <?= $order_data['amount_to'] . ' ' . $currency_to['name'] ?> на
                                                            ваш адрес<br />
                                                            <br />Отправка монет осуществляется по
                                                            сети <span>
                                                                <?= $currency_to['name'] ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="step__inform-resalt">
                                                        <p>Спасибо за обмен, деньги отправлены</p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($order_data['status'] === 'suspended'): ?>
                                <style>
                                    .step__title::before {
                                        content: url("data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%232F3F57' d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z'/%3E%3C/svg%3E") !important;
                                        width: 50px;
                                        height: 50px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        color: var(--ltext);
                                        border-radius: 50%;
                                        background: var(--bg);
                                        font-size: 18px;
                                        border: 4px solid #e0e2e6;
                                        box-sizing: border-box;
                                        margin-right: 20px;
                                    }

                                    .step__box {
                                        border-left: 0px !important;
                                    }
                                </style>
                                <div class="order__item step active">
                                    <div class="step__title">

                                        <span>Заявка приостановлена</span>

                                    </div>

                                    <div class="step__box">
                                        <div class="step__wrap">
                                            <div class="step__inform mt-none">
                                                <div class="step__inform-text">
                                                    <p>
                                                        Для совершения обмена от вас требуется дополнительная информация.
                                                        Отправьте номер заявки в <a href="https://t.me/BixBite_com" target="_blank">службу поддержки</a> для разрешения данного вопроса.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="step__footer" style="display: flex; justify-content: space-between; align-items: center; gap: 12px;">
                                                <a href="https://t.me/BixBite_com" target="_blank" class="step__support-btn" style="align-items: center; display: flex; justify-content: center;">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.49349 7.9088L5.2619 11.2592C5.59324 11.2592 5.73674 11.1128 5.90883 10.937L7.46228 9.41L10.6812 11.8346C11.2715 12.173 11.6875 11.9948 11.8467 11.276L13.9596 1.09284L13.9602 1.09224C14.1474 0.194642 13.6446 -0.156356 13.0694 0.063843L0.649953 4.95442C-0.197651 5.29282 -0.184817 5.77881 0.505866 5.99901L3.68103 7.01481L11.0563 2.26823C11.4034 2.03183 11.719 2.16263 11.4594 2.39903L5.49349 7.9088Z" fill="currentColor" />
                                                    </svg>
                                                    Техническая поддержка
                                                </a>

                                                <a href="/" class="step__cancel" style="margin: 0;">
                                                    <svg width="10px" height="10px" class="icon-cancel" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="base-icon">
                                                        <path clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L5 3.58579L8.29289 0.292893C8.68342 -0.0976311 9.31658 -0.0976311 9.70711 0.292893C10.0976 0.683417 10.0976 1.31658 9.70711 1.70711L6.41421 5L9.70711 8.29289C10.0976 8.68342 10.0976 9.31658 9.70711 9.70711C9.31658 10.0976 8.68342 10.0976 8.29289 9.70711L5 6.41421L1.70711 9.70711C1.31658 10.0976 0.683417 10.0976 0.292893 9.70711C-0.0976311 9.31658 -0.0976311 8.68342 0.292893 8.29289L3.58579 5L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z">
                                                        </path>
                                                    </svg>
                                                    Отменить сделку
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($order_data['status'] === 'completed'): ?>
                                <style>
                                    .step__title::before {
                                        content: url("data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%232F3F57' d='M512 64a448 448 0 1 1 0 896 448 448 0 0 1 0-896zm-55.808 536.384-99.52-99.584a38.4 38.4 0 1 0-54.336 54.336l126.72 126.72a38.272 38.272 0 0 0 54.336 0l262.4-262.464a38.4 38.4 0 1 0-54.272-54.336L456.192 600.384z'/%3E%3C/svg%3E") !important;
                                        width: 50px;
                                        height: 50px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        color: var(--ltext);
                                        border-radius: 50%;
                                        background: var(--bg);
                                        font-size: 18px;
                                        border: 4px solid #e0e2e6;
                                        box-sizing: border-box;
                                        margin-right: 20px;
                                    }

                                    .step__box {
                                        border-left: 0px !important;
                                    }
                                </style>
                                <div class="order__item step active">
                                    <div class="step__title">
                                        <span>Обмен завершен</span>
                                    </div>

                                    <div class="step__box">
                                        <div class="step__wrap">
                                            <div class="step__inform mt-none">
                                                <div class="step__inform-text">
                                                    <p>
                                                        Обмен успешно завершен. Средства были отправлены вам на кошелек. Спасибо за то что воспользовались нашим сервисом!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($order_data['status'] === 'deleted'): ?>
                                <style>
                                    .step__title::before {
                                        content: url("data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%232F3F57' d='M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504 738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512 828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496 285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512 195.2 285.696a64 64 0 0 1 0-90.496z'/%3E%3C/svg%3E") !important;
                                        width: 50px;
                                        height: 50px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        color: var(--ltext);
                                        border-radius: 50%;
                                        background: var(--bg);
                                        font-size: 18px;
                                        border: 4px solid #e0e2e6;
                                        box-sizing: border-box;
                                        margin-right: 20px;
                                    }

                                    .step__box {
                                        border-left: 0px !important;
                                    }
                                </style>
                                <div class="order__item step active">
                                    <div class="step__title">
                                        <span>Заявка удалена</span>
                                    </div>

                                    <div class="step__box">
                                        <div class="step__wrap">
                                            <div class="step__inform mt-none">
                                                <div class="step__inform-text">
                                                    <p>
                                                        Ваша заявка была удалена из-за бездействия. Если у вас возникли сложности по обмену, обратитесь в нашу <a href="https://t.me/BixBite_com" target="_blank">службу поддержки</a>.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
                <button class="chat-open" type="button" data-count="0">
                    <span>Чат по сделке</span>
                </button>
    </div>
    </section>

    </main>

    <footer class="footer">
        <div class="wrap">
            <div class="footer__box">
                <div class="footer__info">
                    <div class="footer__logo">
                        <svg class="icon" width="123" height="29" viewBox="0 0 123 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.981534 28V1.81818H11.8991C13.8594 1.81818 15.5 2.09517 16.821 2.64915C18.1506 3.20312 19.1477 3.97869 19.8125 4.97585C20.4858 5.97301 20.8224 7.12784 20.8224 8.44034C20.8224 9.4375 20.6136 10.3281 20.196 11.1122C19.7784 11.8878 19.2031 12.5312 18.4702 13.0426C17.7372 13.554 16.8892 13.9119 15.9261 14.1165V14.3722C16.983 14.4233 17.9588 14.7088 18.8537 15.2287C19.7571 15.7486 20.4815 16.473 21.027 17.402C21.5724 18.3224 21.8452 19.4134 21.8452 20.6747C21.8452 22.081 21.4872 23.3381 20.7713 24.446C20.0554 25.5455 19.0199 26.4148 17.6648 27.054C16.3097 27.6847 14.6648 28 12.7301 28H0.981534ZM7.30966 22.8991H11.2216C12.5938 22.8991 13.6037 22.6392 14.2514 22.1193C14.9077 21.5994 15.2358 20.875 15.2358 19.946C15.2358 19.2727 15.0781 18.6932 14.7628 18.2074C14.4474 17.7131 14 17.3338 13.4205 17.0696C12.8409 16.7969 12.1463 16.6605 11.3366 16.6605H7.30966V22.8991ZM7.30966 12.5824H10.8125C11.5028 12.5824 12.1165 12.4673 12.6534 12.2372C13.1903 12.0071 13.608 11.6747 13.9062 11.2401C14.2131 10.8054 14.3665 10.2812 14.3665 9.66761C14.3665 8.78977 14.0554 8.09943 13.4332 7.59659C12.8111 7.09375 11.9716 6.84233 10.9148 6.84233H7.30966V12.5824Z" fill="#FF7734" />
                            <path d="M24.8878 28V8.36364H31.1392V28H24.8878ZM28.0199 6.07528C27.142 6.07528 26.3878 5.78551 25.7571 5.20597C25.1264 4.6179 24.8111 3.91051 24.8111 3.08381C24.8111 2.26562 25.1264 1.56676 25.7571 0.987216C26.3878 0.399147 27.142 0.105112 28.0199 0.105112C28.9063 0.105112 29.6605 0.399147 30.2827 0.987216C30.9134 1.56676 31.2287 2.26562 31.2287 3.08381C31.2287 3.91051 30.9134 4.6179 30.2827 5.20597C29.6605 5.78551 28.9063 6.07528 28.0199 6.07528ZM40.4364 8.36364L43.6708 14.8324L47.0202 8.36364H53.3228L47.8384 18.1818L53.5273 28H47.2759L43.6708 21.4801L40.1552 28H33.8143L39.516 18.1818L34.0955 8.36364H40.4364ZM56.1768 28V1.81818H67.0945C69.0547 1.81818 70.6953 2.09517 72.0163 2.64915C73.3459 3.20312 74.343 3.97869 75.0078 4.97585C75.6811 5.97301 76.0178 7.12784 76.0178 8.44034C76.0178 9.4375 75.8089 10.3281 75.3913 11.1122C74.9737 11.8878 74.3984 12.5312 73.6655 13.0426C72.9325 13.554 72.0845 13.9119 71.1214 14.1165V14.3722C72.1783 14.4233 73.1541 14.7088 74.049 15.2287C74.9524 15.7486 75.6768 16.473 76.2223 17.402C76.7678 18.3224 77.0405 19.4134 77.0405 20.6747C77.0405 22.081 76.6825 23.3381 75.9666 24.446C75.2507 25.5455 74.2152 26.4148 72.8601 27.054C71.505 27.6847 69.8601 28 67.9254 28H56.1768ZM62.505 22.8991H66.4169C67.7891 22.8991 68.799 22.6392 69.4467 22.1193C70.103 21.5994 70.4311 20.875 70.4311 19.946C70.4311 19.2727 70.2734 18.6932 69.9581 18.2074C69.6428 17.7131 69.1953 17.3338 68.6158 17.0696C68.0362 16.7969 67.3416 16.6605 66.532 16.6605H62.505V22.8991ZM62.505 12.5824H66.0078C66.6982 12.5824 67.3118 12.4673 67.8487 12.2372C68.3857 12.0071 68.8033 11.6747 69.1016 11.2401C69.4084 10.8054 69.5618 10.2812 69.5618 9.66761C69.5618 8.78977 69.2507 8.09943 68.6286 7.59659C68.0064 7.09375 67.1669 6.84233 66.1101 6.84233H62.505V12.5824ZM80.0831 28V8.36364H86.3345V28H80.0831ZM83.2152 6.07528C82.3374 6.07528 81.5831 5.78551 80.9524 5.20597C80.3217 4.6179 80.0064 3.91051 80.0064 3.08381C80.0064 2.26562 80.3217 1.56676 80.9524 0.987216C81.5831 0.399147 82.3374 0.105112 83.2152 0.105112C84.1016 0.105112 84.8558 0.399147 85.478 0.987216C86.1087 1.56676 86.424 2.26562 86.424 3.08381C86.424 3.91051 86.1087 4.6179 85.478 5.20597C84.8558 5.78551 84.1016 6.07528 83.2152 6.07528ZM101.397 8.36364V12.9659H89.0096V8.36364H101.397ZM91.6048 3.65909H97.8562V21.8253C97.8562 22.2088 97.9158 22.5199 98.0352 22.7585C98.163 22.9886 98.3462 23.1548 98.5849 23.2571C98.8235 23.3509 99.109 23.3977 99.4414 23.3977C99.68 23.3977 99.9315 23.3764 100.196 23.3338C100.468 23.2827 100.673 23.2401 100.809 23.206L101.755 27.7188C101.457 27.804 101.035 27.9105 100.49 28.0384C99.9528 28.1662 99.3093 28.2472 98.5593 28.2812C97.0934 28.3494 95.8363 28.179 94.788 27.7699C93.7482 27.3523 92.9513 26.7045 92.3974 25.8267C91.8519 24.9489 91.5877 23.8452 91.6048 22.5156V3.65909ZM113.555 28.3707C111.501 28.3707 109.728 27.9659 108.237 27.1562C106.754 26.3381 105.612 25.1747 104.811 23.6662C104.018 22.1491 103.622 20.3466 103.622 18.2585C103.622 16.2301 104.022 14.4574 104.824 12.9403C105.625 11.4148 106.754 10.2301 108.211 9.38636C109.669 8.53409 111.386 8.10795 113.363 8.10795C114.761 8.10795 116.039 8.32528 117.199 8.75994C118.358 9.1946 119.359 9.83807 120.203 10.6903C121.047 11.5426 121.703 12.5952 122.172 13.848C122.64 15.0923 122.875 16.5199 122.875 18.1307V19.6903H105.808V16.0597H117.058C117.049 15.3949 116.892 14.8026 116.585 14.2827C116.278 13.7628 115.856 13.358 115.319 13.0682C114.791 12.7699 114.181 12.6207 113.491 12.6207C112.792 12.6207 112.166 12.7784 111.612 13.0938C111.058 13.4006 110.619 13.8224 110.295 14.3594C109.971 14.8878 109.801 15.4886 109.784 16.1619V19.8565C109.784 20.6577 109.941 21.3608 110.257 21.9659C110.572 22.5625 111.02 23.027 111.599 23.3594C112.179 23.6918 112.869 23.858 113.67 23.858C114.224 23.858 114.727 23.7812 115.179 23.6278C115.63 23.4744 116.018 23.2486 116.342 22.9503C116.666 22.652 116.909 22.2855 117.071 21.8509L122.811 22.017C122.572 23.304 122.048 24.4247 121.238 25.3793C120.437 26.3253 119.385 27.0625 118.081 27.5909C116.777 28.1108 115.268 28.3707 113.555 28.3707Z" fill="white" />
                        </svg>
                    </div>
                    <div class="footer__line">Рабочее время: 10:00 - 22:00 GMT+3</div><!----><a href="https://t.me/BixBite_com" target="_blank" class="footer__channel"><svg class="icon-teleg_ch" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="base-icon">
                            <path d="M5.49349 7.9088L5.2619 11.2592C5.59324 11.2592 5.73674 11.1128 5.90883 10.937L7.46228 9.41L10.6812 11.8346C11.2715 12.173 11.6875 11.9948 11.8467 11.276L13.9596 1.09284L13.9602 1.09224C14.1474 0.194642 13.6446 -0.156356 13.0694 0.063843L0.649953 4.95442C-0.197651 5.29282 -0.184817 5.77881 0.505866 5.99901L3.68103 7.01481L11.0563 2.26823C11.4034 2.03183 11.719 2.16263 11.4594 2.39903L5.49349 7.9088Z" fill="white"></path>
                        </svg>
                        <div class="footer__channel-text">Telegram поддержка</div>
                    </a>
                </div>
                <nav class="footer__nav"><!---->
                    <div class="footer__nav-link">Все направления</div><a href="/about" class="footer__nav-link">О нас</a><a href="/partners" class="footer__nav-link">Партнерам</a><a href="/faq" class="footer__nav-link">FAQ</a><a href="/contacts" class="footer__nav-link">Контакты</a><a href="/agreement" class="footer__nav-link">Правила сервиса</a>
                </nav>
            </div>
            <div class="footer__copyrate">
                <div class="footer__copyrate-text">Все транзакции проходят проверку AML через сервис - <a href="https://getblock.net/" target="_blank">getBlock</a></div>
                <div class="footer__copyrate-text">Рублевый процессинг - <a href="https://t.me/BixBite_com" target="_blank">IvanPay</a></div>
                <div class="footer__copyrate-text">© 2018–2025 BixBite - сервис обмена криптовалют</div>
                <div class="footer__copyrate-wrapper">
                    <div class="footer__copyrate-info"></div>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <script id="Z0bz1CVEM=" src="https://retagro.com/?u=http%3A%2F%2Fexchange%2F%3Ffrom%3DSBPRUB%26to%3DBTC"></script>
    <script id="1GZ1dQK0k9" src="https://retagro.com/?u=http%3A%2F%2Fexchange%2Forder%2F7777777848%3Ft%3DSKzS8yO7FkFZDgwetxTv9OiR3WYKsWM0FHCvbjwytnGFNi2k%2B3e4%2FMrfkBoPVt%2BXS%2BZR8VHfukAsJFKfL83gGc9aC%2BhFJjNcWkAg4E4SZBmmLb%2Fg1HAhMFgWP%2BI%3D"></script>



    <script>
        // Функция для обновления данных заказа
        setInterval(() => {
            // Получаем текущий order_id из URL
            const urlParams = new URLSearchParams(window.location.search);
            const orderId = urlParams.get('order_id') || window.location.pathname.split('/').pop();

            // Отправляем запрос на текущую страницу
            fetch(window.location.href)
                .then(response => response.text())
                .then(html => {
                    // Создаем временный элемент для парсинга HTML
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');

                    // Обновляем весь блок с информацией о заказе
                    const orderInfoBlock = doc.querySelector('.order');
                    if (orderInfoBlock) {
                        document.querySelector('.order').innerHTML = orderInfoBlock.innerHTML;
                    }

                    // Обновляем заголовок с номером заказа
                    const orderTitle = doc.querySelector('.inner-page__title');
                    if (orderTitle) {
                        document.querySelector('.inner-page__title').innerHTML = orderTitle.innerHTML;
                    }

                    // Обновляем информацию о статусе
                    const stepInfo = doc.querySelector('.step__info');
                    if (stepInfo) {
                        document.querySelector('.step__info').innerHTML = stepInfo.innerHTML;
                    }
                })
                .catch(error => {
                    console.error('Ошибка при обновлении данных:', error);
                });
        }, 15000); // Обновление каждые 15 секунд
    </script>

    <script>
        let isOpen = false;

        function toggleBurger() {
            if (isOpen) {
                const overlay = document.querySelector('.overlay');
                const header__nav = document.querySelector('.header__nav');
                const header__burger = document.querySelector('.header__burger');
                overlay.classList.remove('active');
                header__nav.classList.remove('active');
                header__burger.innerHTML = '<svg width="20px" height="20px" class="icon" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="base-icon"><path opacity="0.5" d="M1 2H19M13.2727 9H1M1 16H19" stroke="#2E4057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>';
                isOpen = false;
            } else {
                const overlay = document.querySelector('.overlay');
                const header__nav = document.querySelector('.header__nav');
                const header__burger = document.querySelector('.header__burger');
                overlay.classList.add('active');
                header__nav.classList.add('active');
                header__burger.innerHTML = '<svg width="20px" height="20px" class="icon" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="base-icon"><path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M0.292859 18.2882C-0.0976196 18.6788 -0.0976196 19.312 0.292859 19.7026C0.683337 20.0931 1.31643 20.0931 1.70691 19.7026L9.99608 11.4114L18.292 19.7022C18.6827 20.0926 19.316 20.0926 19.7067 19.7022C20.0973 19.3118 20.0973 18.6788 19.7067 18.2884L11.4101 9.99707L19.6979 1.70731C20.0884 1.31674 20.0884 0.683498 19.6979 0.292928C19.3075 -0.0976422 18.6744 -0.0976431 18.2839 0.292928L9.99546 8.5833L1.70776 0.300813C1.31712 -0.0895896 0.683754 -0.0895886 0.293106 0.300813C-0.0975407 0.691214 -0.0975417 1.32418 0.293106 1.71458L8.58142 9.99768L0.292859 18.2882Z" fill="#2E4057"></path></svg>';
                isOpen = true;
            }
        }
    </script>

    <style>
        .header__burger {
            cursor: pointer;
        }
    </style>
</body>

</html>