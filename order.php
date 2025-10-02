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
        <strong>We're sorry but CoinFiber doesn't work properly without JavaScript
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

<svg class="icon-logo" xmlns="http://www.w3.org/2000/svg" width="173" height="29" viewBox="0 0 173 29" fill="none">
<path d="M24.7472 11.304H18.3551C18.2699 10.6477 18.0952 10.0554 17.831 9.52699C17.5668 8.99858 17.2173 8.54687 16.7827 8.17188C16.348 7.79688 15.8324 7.51136 15.2358 7.31534C14.6477 7.11079 13.9957 7.00852 13.2798 7.00852C12.0099 7.00852 10.9148 7.3196 9.99432 7.94176C9.08239 8.56392 8.37926 9.46307 7.88494 10.6392C7.39915 11.8153 7.15625 13.2386 7.15625 14.9091C7.15625 16.6477 7.40341 18.1051 7.89773 19.2812C8.40057 20.4489 9.10369 21.331 10.0071 21.9276C10.919 22.5156 11.9972 22.8097 13.2415 22.8097C13.9403 22.8097 14.5753 22.7202 15.1463 22.5412C15.7259 22.3622 16.233 22.1023 16.6676 21.7614C17.1108 21.4119 17.473 20.9901 17.7543 20.4957C18.044 19.9929 18.2443 19.4261 18.3551 18.7955L24.7472 18.8338C24.6364 19.9929 24.2997 21.1349 23.7372 22.2599C23.1832 23.3849 22.4205 24.4119 21.4489 25.3409C20.4773 26.2614 19.2926 26.9943 17.8949 27.5398C16.5057 28.0852 14.9119 28.358 13.1136 28.358C10.7443 28.358 8.62216 27.8381 6.74716 26.7983C4.88068 25.75 3.40625 24.2244 2.32386 22.2216C1.24148 20.2187 0.700284 17.7812 0.700284 14.9091C0.700284 12.0284 1.25 9.58665 2.34943 7.58381C3.44886 5.58097 4.93608 4.05966 6.81108 3.01989C8.68608 1.98011 10.7869 1.46023 13.1136 1.46023C14.6989 1.46023 16.1648 1.68182 17.5114 2.125C18.858 2.55966 20.0426 3.19886 21.0653 4.04261C22.0881 4.87784 22.919 5.90483 23.5582 7.12358C24.1974 8.34233 24.5938 9.7358 24.7472 11.304Z" fill="#FF7734"/>
<path d="M37.5344 28.3707C35.4719 28.3707 33.6992 27.9489 32.2163 27.1051C30.7418 26.2528 29.604 25.0682 28.8029 23.5511C28.0103 22.0256 27.614 20.2571 27.614 18.2457C27.614 16.2259 28.0103 14.4574 28.8029 12.9403C29.604 11.4148 30.7418 10.2301 32.2163 9.38636C33.6992 8.53409 35.4719 8.10795 37.5344 8.10795C39.5969 8.10795 41.3654 8.53409 42.8398 9.38636C44.3228 10.2301 45.4606 11.4148 46.2532 12.9403C47.0543 14.4574 47.4549 16.2259 47.4549 18.2457C47.4549 20.2571 47.0543 22.0256 46.2532 23.5511C45.4606 25.0682 44.3228 26.2528 42.8398 27.1051C41.3654 27.9489 39.5969 28.3707 37.5344 28.3707ZM37.5728 23.6534C38.3228 23.6534 38.9577 23.4233 39.4776 22.9631C39.9975 22.5028 40.3938 21.8636 40.6665 21.0455C40.9478 20.2273 41.0884 19.2812 41.0884 18.2074C41.0884 17.1165 40.9478 16.1619 40.6665 15.3438C40.3938 14.5256 39.9975 13.8864 39.4776 13.4261C38.9577 12.9659 38.3228 12.7358 37.5728 12.7358C36.7972 12.7358 36.141 12.9659 35.604 13.4261C35.0756 13.8864 34.6708 14.5256 34.3896 15.3438C34.1168 16.1619 33.9805 17.1165 33.9805 18.2074C33.9805 19.2812 34.1168 20.2273 34.3896 21.0455C34.6708 21.8636 35.0756 22.5028 35.604 22.9631C36.141 23.4233 36.7972 23.6534 37.5728 23.6534ZM50.6573 28V8.36364H56.9087V28H50.6573ZM53.7894 6.07528C52.9116 6.07528 52.1573 5.78551 51.5266 5.20597C50.896 4.6179 50.5806 3.91051 50.5806 3.08381C50.5806 2.26562 50.896 1.56676 51.5266 0.987216C52.1573 0.399147 52.9116 0.105112 53.7894 0.105112C54.6758 0.105112 55.43 0.399147 56.0522 0.987216C56.6829 1.56676 56.9982 2.26562 56.9982 3.08381C56.9982 3.91051 56.6829 4.6179 56.0522 5.20597C55.43 5.78551 54.6758 6.07528 53.7894 6.07528ZM67.1392 16.8011V28H60.8878V8.36364H66.8324V11.9688H67.0497C67.4844 10.767 68.2259 9.82528 69.2741 9.14347C70.3224 8.45312 71.571 8.10795 73.0199 8.10795C74.4006 8.10795 75.598 8.41903 76.6122 9.04119C77.6349 9.65483 78.4276 10.5156 78.9901 11.6236C79.5611 12.723 79.8423 14.0099 79.8338 15.4844V28H73.5824V16.7116C73.5909 15.6207 73.3139 14.7685 72.7514 14.1548C72.1974 13.5412 71.4261 13.2344 70.4375 13.2344C69.7812 13.2344 69.2017 13.3793 68.6989 13.669C68.2045 13.9503 67.821 14.3551 67.5483 14.8835C67.2841 15.4119 67.1477 16.0511 67.1392 16.8011ZM83.7042 28V1.81818H101.576V6.95739H90.0323V12.3267H100.439V17.4787H90.0323V28H83.7042ZM104.763 28V8.36364H111.014V28H104.763ZM107.895 6.07528C107.017 6.07528 106.263 5.78551 105.632 5.20597C105.001 4.6179 104.686 3.91051 104.686 3.08381C104.686 2.26562 105.001 1.56676 105.632 0.987216C106.263 0.399147 107.017 0.105112 107.895 0.105112C108.781 0.105112 109.536 0.399147 110.158 0.987216C110.788 1.56676 111.104 2.26562 111.104 3.08381C111.104 3.91051 110.788 4.6179 110.158 5.20597C109.536 5.78551 108.781 6.07528 107.895 6.07528ZM114.993 28V1.81818H121.245V11.7259H121.373C121.628 11.1293 121.99 10.554 122.459 10C122.936 9.44602 123.542 8.99432 124.275 8.64489C125.016 8.28693 125.902 8.10795 126.934 8.10795C128.297 8.10795 129.571 8.46591 130.756 9.18182C131.949 9.89773 132.912 11.0014 133.645 12.4929C134.378 13.9844 134.745 15.8849 134.745 18.1946C134.745 20.419 134.391 22.2812 133.684 23.7812C132.985 25.2812 132.039 26.4062 130.846 27.1562C129.661 27.9062 128.344 28.2812 126.895 28.2812C125.907 28.2812 125.05 28.1193 124.326 27.7955C123.601 27.4716 122.992 27.0455 122.498 26.517C122.012 25.9886 121.637 25.4219 121.373 24.8168H121.181V28H114.993ZM121.117 18.1818C121.117 19.2386 121.257 20.1591 121.539 20.9432C121.828 21.7273 122.242 22.3366 122.779 22.7713C123.324 23.1974 123.976 23.4105 124.735 23.4105C125.502 23.4105 126.154 23.1974 126.691 22.7713C127.228 22.3366 127.632 21.7273 127.905 20.9432C128.186 20.1591 128.327 19.2386 128.327 18.1818C128.327 17.125 128.186 16.2088 127.905 15.4332C127.632 14.6577 127.228 14.0568 126.691 13.6307C126.162 13.2045 125.51 12.9915 124.735 12.9915C123.968 12.9915 123.316 13.2003 122.779 13.6179C122.242 14.0355 121.828 14.6321 121.539 15.4077C121.257 16.1832 121.117 17.108 121.117 18.1818ZM147.2 28.3707C145.146 28.3707 143.373 27.9659 141.881 27.1562C140.398 26.3381 139.256 25.1747 138.455 23.6662C137.663 22.1491 137.266 20.3466 137.266 18.2585C137.266 16.2301 137.667 14.4574 138.468 12.9403C139.269 11.4148 140.398 10.2301 141.856 9.38636C143.313 8.53409 145.031 8.10795 147.008 8.10795C148.406 8.10795 149.684 8.32528 150.843 8.75994C152.002 9.1946 153.004 9.83807 153.847 10.6903C154.691 11.5426 155.347 12.5952 155.816 13.848C156.285 15.0923 156.519 16.5199 156.519 18.1307V19.6903H139.452V16.0597H150.702C150.694 15.3949 150.536 14.8026 150.229 14.2827C149.923 13.7628 149.501 13.358 148.964 13.0682C148.435 12.7699 147.826 12.6207 147.136 12.6207C146.437 12.6207 145.81 12.7784 145.256 13.0938C144.702 13.4006 144.263 13.8224 143.94 14.3594C143.616 14.8878 143.445 15.4886 143.428 16.1619V19.8565C143.428 20.6577 143.586 21.3608 143.901 21.9659C144.217 22.5625 144.664 23.027 145.244 23.3594C145.823 23.6918 146.513 23.858 147.315 23.858C147.869 23.858 148.371 23.7812 148.823 23.6278C149.275 23.4744 149.663 23.2486 149.987 22.9503C150.31 22.652 150.553 22.2855 150.715 21.8509L156.455 22.017C156.217 23.304 155.692 24.4247 154.883 25.3793C154.082 26.3253 153.029 27.0625 151.725 27.5909C150.421 28.1108 148.913 28.3707 147.2 28.3707ZM159.712 28V8.36364H165.784V11.9432H165.989C166.347 10.6477 166.931 9.68466 167.74 9.05398C168.55 8.41477 169.492 8.09517 170.566 8.09517C170.855 8.09517 171.154 8.11648 171.461 8.15909C171.767 8.19318 172.053 8.24858 172.317 8.32528V13.7585C172.019 13.6562 171.627 13.5753 171.141 13.5156C170.664 13.456 170.238 13.4261 169.863 13.4261C169.121 13.4261 168.452 13.5923 167.855 13.9247C167.267 14.2486 166.803 14.7045 166.462 15.2926C166.13 15.8722 165.963 16.554 165.963 17.3381V28H159.712Z" fill="#2F3F57"/>
</svg>


</a><button type="button" class="header__support"><svg width="20px" height="20px" class="icon-chat" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="base-icon">
                            <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M17.3022 9.38333V13.6006C17.3022 14.7052 16.4067 15.6006 15.3022 15.6006H14.4684V18.0011C14.4684 18.3799 14.2544 18.7261 13.9156 18.8955C13.5768 19.0649 13.1714 19.0284 12.8684 18.8011L8.60111 15.6006H2C0.89543 15.6006 0 14.7052 0 13.6006V4.26569C0 3.16112 0.89543 2.26569 2 2.26569H9.34977C9.09782 2.88529 8.95233 3.55952 8.936 4.26569H2V13.6006L8.93445 13.6006C9.15082 13.6006 9.36135 13.6708 9.53445 13.8006L12.4684 16.0011V14.6006C12.4684 14.0483 12.9161 13.6006 13.4684 13.6006L15.3022 13.6006V10.0239C16.0188 9.93556 16.6941 9.71346 17.3022 9.38333Z" fill="#2E4057"></path>
                            <circle cx="14.6019" cy="4.39926" r="3.40048" fill="#00AF92"></circle>
                        </svg></button>
                    <div class="header__info">Рабочее время: 10:00 - 22:00 GMT+3</div>
                    <div class="header__nav"><a href="/about" class="header__nav-link">О нас</a><a href="/partners" class="header__nav-link">Партнерам</a><a href="/faq" class="header__nav-link">FAQ</a><a href="/contacts" class="header__nav-link">Контакты</a><a href="/agreement" class="header__nav-link">Правила сервиса</a><a class="header__nav-link --support" type="button" href="https://t.me/coinfiber_com" target="_blank"><svg class="icon-chat" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="base-icon">
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
                                                                    CoinFiber не принимает средства с
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
                                                            Отправьте номер заявки в <a href="https://t.me/coinfiber_com" target="_blank">службу поддержки</a> для разрешения данного вопроса.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="step__footer" style="display: flex; justify-content: space-between; align-items: center; gap: 12px;">
                                                    <a href="https://t.me/coinfiber_com" target="_blank" class="step__support-btn" style="align-items: center; display: flex; justify-content: center;">
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
                                                            Ваша заявка была удалена из-за бездействия. Если у вас возникли сложности по обмену, обратитесь в нашу <a href="https://t.me/coinfiber_com" target="_blank">службу поддержки</a>.
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

<svg class="icon-logo" xmlns="http://www.w3.org/2000/svg" width="173" height="29" viewBox="0 0 173 29" fill="none">
<path d="M24.7472 11.304H18.3551C18.2699 10.6477 18.0952 10.0554 17.831 9.52699C17.5668 8.99858 17.2173 8.54687 16.7827 8.17188C16.348 7.79688 15.8324 7.51136 15.2358 7.31534C14.6477 7.11079 13.9957 7.00852 13.2798 7.00852C12.0099 7.00852 10.9148 7.3196 9.99432 7.94176C9.08239 8.56392 8.37926 9.46307 7.88494 10.6392C7.39915 11.8153 7.15625 13.2386 7.15625 14.9091C7.15625 16.6477 7.40341 18.1051 7.89773 19.2812C8.40057 20.4489 9.10369 21.331 10.0071 21.9276C10.919 22.5156 11.9972 22.8097 13.2415 22.8097C13.9403 22.8097 14.5753 22.7202 15.1463 22.5412C15.7259 22.3622 16.233 22.1023 16.6676 21.7614C17.1108 21.4119 17.473 20.9901 17.7543 20.4957C18.044 19.9929 18.2443 19.4261 18.3551 18.7955L24.7472 18.8338C24.6364 19.9929 24.2997 21.1349 23.7372 22.2599C23.1832 23.3849 22.4205 24.4119 21.4489 25.3409C20.4773 26.2614 19.2926 26.9943 17.8949 27.5398C16.5057 28.0852 14.9119 28.358 13.1136 28.358C10.7443 28.358 8.62216 27.8381 6.74716 26.7983C4.88068 25.75 3.40625 24.2244 2.32386 22.2216C1.24148 20.2187 0.700284 17.7812 0.700284 14.9091C0.700284 12.0284 1.25 9.58665 2.34943 7.58381C3.44886 5.58097 4.93608 4.05966 6.81108 3.01989C8.68608 1.98011 10.7869 1.46023 13.1136 1.46023C14.6989 1.46023 16.1648 1.68182 17.5114 2.125C18.858 2.55966 20.0426 3.19886 21.0653 4.04261C22.0881 4.87784 22.919 5.90483 23.5582 7.12358C24.1974 8.34233 24.5938 9.7358 24.7472 11.304Z" fill="#FF7734"/>
<path d="M37.5344 28.3707C35.4719 28.3707 33.6992 27.9489 32.2163 27.1051C30.7418 26.2528 29.604 25.0682 28.8029 23.5511C28.0103 22.0256 27.614 20.2571 27.614 18.2457C27.614 16.2259 28.0103 14.4574 28.8029 12.9403C29.604 11.4148 30.7418 10.2301 32.2163 9.38636C33.6992 8.53409 35.4719 8.10795 37.5344 8.10795C39.5969 8.10795 41.3654 8.53409 42.8398 9.38636C44.3228 10.2301 45.4606 11.4148 46.2532 12.9403C47.0543 14.4574 47.4549 16.2259 47.4549 18.2457C47.4549 20.2571 47.0543 22.0256 46.2532 23.5511C45.4606 25.0682 44.3228 26.2528 42.8398 27.1051C41.3654 27.9489 39.5969 28.3707 37.5344 28.3707ZM37.5728 23.6534C38.3228 23.6534 38.9577 23.4233 39.4776 22.9631C39.9975 22.5028 40.3938 21.8636 40.6665 21.0455C40.9478 20.2273 41.0884 19.2812 41.0884 18.2074C41.0884 17.1165 40.9478 16.1619 40.6665 15.3438C40.3938 14.5256 39.9975 13.8864 39.4776 13.4261C38.9577 12.9659 38.3228 12.7358 37.5728 12.7358C36.7972 12.7358 36.141 12.9659 35.604 13.4261C35.0756 13.8864 34.6708 14.5256 34.3896 15.3438C34.1168 16.1619 33.9805 17.1165 33.9805 18.2074C33.9805 19.2812 34.1168 20.2273 34.3896 21.0455C34.6708 21.8636 35.0756 22.5028 35.604 22.9631C36.141 23.4233 36.7972 23.6534 37.5728 23.6534ZM50.6573 28V8.36364H56.9087V28H50.6573ZM53.7894 6.07528C52.9116 6.07528 52.1573 5.78551 51.5266 5.20597C50.896 4.6179 50.5806 3.91051 50.5806 3.08381C50.5806 2.26562 50.896 1.56676 51.5266 0.987216C52.1573 0.399147 52.9116 0.105112 53.7894 0.105112C54.6758 0.105112 55.43 0.399147 56.0522 0.987216C56.6829 1.56676 56.9982 2.26562 56.9982 3.08381C56.9982 3.91051 56.6829 4.6179 56.0522 5.20597C55.43 5.78551 54.6758 6.07528 53.7894 6.07528ZM67.1392 16.8011V28H60.8878V8.36364H66.8324V11.9688H67.0497C67.4844 10.767 68.2259 9.82528 69.2741 9.14347C70.3224 8.45312 71.571 8.10795 73.0199 8.10795C74.4006 8.10795 75.598 8.41903 76.6122 9.04119C77.6349 9.65483 78.4276 10.5156 78.9901 11.6236C79.5611 12.723 79.8423 14.0099 79.8338 15.4844V28H73.5824V16.7116C73.5909 15.6207 73.3139 14.7685 72.7514 14.1548C72.1974 13.5412 71.4261 13.2344 70.4375 13.2344C69.7812 13.2344 69.2017 13.3793 68.6989 13.669C68.2045 13.9503 67.821 14.3551 67.5483 14.8835C67.2841 15.4119 67.1477 16.0511 67.1392 16.8011ZM83.7042 28V1.81818H101.576V6.95739H90.0323V12.3267H100.439V17.4787H90.0323V28H83.7042ZM104.763 28V8.36364H111.014V28H104.763ZM107.895 6.07528C107.017 6.07528 106.263 5.78551 105.632 5.20597C105.001 4.6179 104.686 3.91051 104.686 3.08381C104.686 2.26562 105.001 1.56676 105.632 0.987216C106.263 0.399147 107.017 0.105112 107.895 0.105112C108.781 0.105112 109.536 0.399147 110.158 0.987216C110.788 1.56676 111.104 2.26562 111.104 3.08381C111.104 3.91051 110.788 4.6179 110.158 5.20597C109.536 5.78551 108.781 6.07528 107.895 6.07528ZM114.993 28V1.81818H121.245V11.7259H121.373C121.628 11.1293 121.99 10.554 122.459 10C122.936 9.44602 123.542 8.99432 124.275 8.64489C125.016 8.28693 125.902 8.10795 126.934 8.10795C128.297 8.10795 129.571 8.46591 130.756 9.18182C131.949 9.89773 132.912 11.0014 133.645 12.4929C134.378 13.9844 134.745 15.8849 134.745 18.1946C134.745 20.419 134.391 22.2812 133.684 23.7812C132.985 25.2812 132.039 26.4062 130.846 27.1562C129.661 27.9062 128.344 28.2812 126.895 28.2812C125.907 28.2812 125.05 28.1193 124.326 27.7955C123.601 27.4716 122.992 27.0455 122.498 26.517C122.012 25.9886 121.637 25.4219 121.373 24.8168H121.181V28H114.993ZM121.117 18.1818C121.117 19.2386 121.257 20.1591 121.539 20.9432C121.828 21.7273 122.242 22.3366 122.779 22.7713C123.324 23.1974 123.976 23.4105 124.735 23.4105C125.502 23.4105 126.154 23.1974 126.691 22.7713C127.228 22.3366 127.632 21.7273 127.905 20.9432C128.186 20.1591 128.327 19.2386 128.327 18.1818C128.327 17.125 128.186 16.2088 127.905 15.4332C127.632 14.6577 127.228 14.0568 126.691 13.6307C126.162 13.2045 125.51 12.9915 124.735 12.9915C123.968 12.9915 123.316 13.2003 122.779 13.6179C122.242 14.0355 121.828 14.6321 121.539 15.4077C121.257 16.1832 121.117 17.108 121.117 18.1818ZM147.2 28.3707C145.146 28.3707 143.373 27.9659 141.881 27.1562C140.398 26.3381 139.256 25.1747 138.455 23.6662C137.663 22.1491 137.266 20.3466 137.266 18.2585C137.266 16.2301 137.667 14.4574 138.468 12.9403C139.269 11.4148 140.398 10.2301 141.856 9.38636C143.313 8.53409 145.031 8.10795 147.008 8.10795C148.406 8.10795 149.684 8.32528 150.843 8.75994C152.002 9.1946 153.004 9.83807 153.847 10.6903C154.691 11.5426 155.347 12.5952 155.816 13.848C156.285 15.0923 156.519 16.5199 156.519 18.1307V19.6903H139.452V16.0597H150.702C150.694 15.3949 150.536 14.8026 150.229 14.2827C149.923 13.7628 149.501 13.358 148.964 13.0682C148.435 12.7699 147.826 12.6207 147.136 12.6207C146.437 12.6207 145.81 12.7784 145.256 13.0938C144.702 13.4006 144.263 13.8224 143.94 14.3594C143.616 14.8878 143.445 15.4886 143.428 16.1619V19.8565C143.428 20.6577 143.586 21.3608 143.901 21.9659C144.217 22.5625 144.664 23.027 145.244 23.3594C145.823 23.6918 146.513 23.858 147.315 23.858C147.869 23.858 148.371 23.7812 148.823 23.6278C149.275 23.4744 149.663 23.2486 149.987 22.9503C150.31 22.652 150.553 22.2855 150.715 21.8509L156.455 22.017C156.217 23.304 155.692 24.4247 154.883 25.3793C154.082 26.3253 153.029 27.0625 151.725 27.5909C150.421 28.1108 148.913 28.3707 147.2 28.3707ZM159.712 28V8.36364H165.784V11.9432H165.989C166.347 10.6477 166.931 9.68466 167.74 9.05398C168.55 8.41477 169.492 8.09517 170.566 8.09517C170.855 8.09517 171.154 8.11648 171.461 8.15909C171.767 8.19318 172.053 8.24858 172.317 8.32528V13.7585C172.019 13.6562 171.627 13.5753 171.141 13.5156C170.664 13.456 170.238 13.4261 169.863 13.4261C169.121 13.4261 168.452 13.5923 167.855 13.9247C167.267 14.2486 166.803 14.7045 166.462 15.2926C166.13 15.8722 165.963 16.554 165.963 17.3381V28H159.712Z" fill="white"/>
</svg>


                    <div class="footer__line">Рабочее время: 10:00 - 22:00 GMT+3</div><!----><a href="https://t.me/coinfiber_com" target="_blank" class="footer__channel"><svg class="icon-teleg_ch" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="base-icon">
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
                <div class="footer__copyrate-text">Рублевый процессинг - <a href="https://t.me/coinfiber_com" target="_blank">IvanPay</a></div>
                <div class="footer__copyrate-text">© 2018–2025 CoinFiber - сервис обмена криптовалют</div>
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