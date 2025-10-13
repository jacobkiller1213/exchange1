<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Headers: Content-Type, Authorization, x-ssk, cache-id');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Expose-Headers: content-type, cache-control, x-ssk');
header('Access-Control-Max-Age: 6000');
header('Cache-Control: private, must-revalidate');
header('Date: Sun, 16 Mar 2025 09:13:08 GMT');
header('Expires: -1');
header('Pragma: no-cache');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-RateLimit-Limit: 200');
header('X-RateLimit-Remaining: 194');
header('X-SSK: 54764b6ac166f566ee7b2f688e794c17.15d747c2d6cf896808d2706a00cc8770');

$array = [
    "status" => 200,
    "data"   => [
        "versions"        => [
            "api_latest_version"    => "1",
            "mobile_min_version"    => "1.0.0",
            "mobile_latest_app_url" => "https://api-statics.exhub.io/mobile/exhub_e27ad210c0e8262e331496a26ac26b4d641a35bf273b5dc9fae1ef1d3dcfe934.apk"
        ],
        "settings"        => [
            "maintenance"       => "no",
            "mobileIsActive"    => "Y",
            "contactEmail"      => "mail@exhub.io",
            "contactTelegram"   => "BixBite",
            "cashIsActive"      => "N",
            "maxFileUploadSize" => "8808038"
        ],
        "currencies"      => [
            [
                "id"                 => "1",
                "name"               => "Bitcoin (BTC)",
                "code"               => "BITGO_BTC",
                "active"             => "Y",
                "iso_code"           => "BTC",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "BTC",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Bitcoin",
                "round_for"          => "8",
                "sort"               => "1000",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^[13][a-km-zA-HJ-NP-Z1-9]{25,34}$|^[(bc1q)|(bc1p)][0-9A-Za-z]{37,62}$",
                "wallet_type"        => "1",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "<p>Рекомендуем с целью ускорения прохождения транзакции, увеличить комиссию в системе Bitcoin. Актуальные комиссии можно посмотреть <a href=\"https://bitaps.com\" target=\"_blank\">здесь</a>.</p>",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "BTC (Bitcoin)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/BTC.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Bitcoin (BTC)",
                        "wallet_name" => "Кошелек Bitcoin",
                        "text_in"     => "<p>Рекомендуем с целью ускорения прохождения транзакции, увеличить комиссию в системе Bitcoin. Актуальные комиссии можно посмотреть <a href=\"https://bitaps.com\" target=\"_blank\">здесь</a>.</p>"
                    ],
                    "en" => [
                        "name"        => "",
                        "wallet_name" => "Bitcoin (BTC) wallet",
                        "text_in"     => "<p>We recommend that in order to speed up the transaction, increase the commission in the Bitcoin system. Current fees can be viewed <a href=\"https://bitaps.com\" target=\"_blank\"> here </a>.</p>"
                    ]
                ]
            ],
            [
                "id"                 => "2",
                "name"               => "Litecoin (LTC)",
                "code"               => "BITGO_LTC",
                "active"             => "Y",
                "iso_code"           => "LTC",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "LTC",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Litecoin (LTC)",
                "round_for"          => "8",
                "sort"               => "970",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(L|M|3)[A-Za-z0-9]{33}$|^(ltc1)[0-9A-Za-z]{39}$",
                "wallet_type"        => "1",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "LTC (Litecoin)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/LTC.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Litecoin (LTC)",
                        "name"        => "Litecoin (LTC)"
                    ],
                    "en" => [
                        "wallet_name" => "Litecoin (LTC) wallet",
                        "name"        => ""
                    ]
                ]
            ],
            [
                "id"                 => "20",
                "name"               => "Bitcoin Cash (BCH)",
                "code"               => "BITGO_BCH",
                "active"             => "Y",
                "iso_code"           => "BCH",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "BCH",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Bitcoin Cash (BCH)",
                "round_for"          => "8",
                "sort"               => "800",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^[13][a-km-zA-HJ-NP-Z1-9]{25,34}$|^(bitcoincash:)?(q|p)[a-z0-9]{41}$",
                "wallet_type"        => "1",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "BCH (Bitcoin Cash)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/BCH.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Bitcoin Cash (BCH)",
                        "name"        => "Bitcoin Cash (BCH)"
                    ],
                    "en" => [
                        "wallet_name" => "Bitcoin Cash (BCH) wallet",
                        "name"        => ""
                    ]
                ]
            ],
            [
                "id"                 => "21",
                "name"               => "Zcash (ZEC)",
                "code"               => "BITGO_ZEC",
                "active"             => "Y",
                "iso_code"           => "ZEC",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "ZEC",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Zcash (ZEC)",
                "round_for"          => "8",
                "sort"               => "500",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^t1[a-zA-Z0-9]{33}$",
                "wallet_type"        => "1",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "ZEC (Zcash)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ZEC.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Zcash (ZEC)"
                    ],
                    "en" => [
                        "wallet_name" => "Zcash (ZEC) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "22",
                "name"               => "Dash (DASH)",
                "code"               => "BITGO_DASH",
                "active"             => "Y",
                "iso_code"           => "DASH",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "DASH",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Dash (DASH)",
                "round_for"          => "8",
                "sort"               => "700",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^[X|7][0-9A-Za-z]{33}$",
                "wallet_type"        => "1",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "DASH (Dash)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/DASH.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Dash (DASH)"
                    ],
                    "en" => [
                        "wallet_name" => "Dash (DASH) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "64",
                "name"               => "Сбербанк RUB",
                "code"               => "CARD_SBER_RUB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "SBERRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Сбербанк",
                "round_for"          => "2",
                "sort"               => "1500",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16,}$",
                "wallet_type"        => "7",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/SBERRUB.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Карта Сбербанк",
                        "name"        => "Сбербанк RUB"
                    ],
                    "en" => [
                        "wallet_name" => "Card Sberbank RUB",
                        "name"        => "Sberbank RUB"
                    ]
                ]
            ],
            [
                "id"                 => "67",
                "name"               => "Ethereum (ETH)",
                "code"               => "BITGO_ETH",
                "active"             => "Y",
                "iso_code"           => "ETH",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "ETH",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Ethereum",
                "round_for"          => "8",
                "sort"               => "980",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "1",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "20",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ETH.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Ethereum"
                    ],
                    "en" => [
                        "wallet_name" => "Ethereum wallet"
                    ]
                ]
            ],
            [
                "id"                 => "68",
                "name"               => "Tether ERC20 (USDT)",
                "code"               => "BITGO_USDT",
                "active"             => "Y",
                "iso_code"           => "USDT",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "USDTERC20",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Tether ERC20 (USDT)",
                "round_for"          => "2",
                "sort"               => "990",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "1",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "3",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "ERC-20 (Ethereum)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/USDTERC20.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Tether ERC20 (USDT)",
                        "text_in"     => ""
                    ],
                    "en" => [
                        "wallet_name" => "Tether ERC20 (USDT) wallet",
                        "text_in"     => "<p>Sending on another network will result in loss of funds.</p>"
                    ]
                ]
            ],
            [
                "id"                 => "70",
                "name"               => "Наличные RUB",
                "code"               => "REAL_MONEY_RUB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "CASHRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "0",
                "wallet_name"        => "Наличные RUB",
                "round_for"          => "4",
                "sort"               => "150",
                "group_id"           => "213",
                "tag_name"           => "",
                "address_regex"      => "",
                "wallet_type"        => "10",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/CASHRUB.svg",
                "walletIsCard"       => "N",
                "isCash"             => "Y",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Наличные RUB"
                    ],
                    "en" => [
                        "name" => "Cash RUB"
                    ]
                ]
            ],
            [
                "id"                 => "74",
                "name"               => "Ripple (XRP)",
                "code"               => "BITGO_XRP",
                "active"             => "Y",
                "iso_code"           => "XRP",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "XRP",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Ripple (XRP)",
                "round_for"          => "8",
                "sort"               => "350",
                "group_id"           => "210",
                "tag_name"           => "Тег назначения",
                "address_regex"      => "^r[1-9A-HJ-NP-Za-km-z]{25,34}$",
                "wallet_type"        => "1",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "ID",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "20",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "XRP (Ripple)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/XRP.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "tag_name"    => "Тег назначения",
                        "wallet_name" => "Кошелек Ripple (XRP)"
                    ],
                    "en" => [
                        "tag_name"    => "Destination tag",
                        "wallet_name" => "Ripple (XRP) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "76",
                "name"               => "Stellar (XLM)",
                "code"               => "BITGO_XLM",
                "active"             => "Y",
                "iso_code"           => "XLM",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "XLM",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Stellar (XLM)",
                "round_for"          => "7",
                "sort"               => "0",
                "group_id"           => "210",
                "tag_name"           => "Тег назначения",
                "address_regex"      => "^G[A-D]{1}[A-Z2-7]{54}$",
                "wallet_type"        => "1",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "ID",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "20",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "XLM (Stellar)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/XLM.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "tag_name"    => "Тег назначения",
                        "wallet_name" => "Кошелек Stellar (XLM)"
                    ],
                    "en" => [
                        "tag_name"    => "Destination tag",
                        "wallet_name" => "Stellar (XLM) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "100",
                "name"               => "USD Coin ERC20 (USDC)",
                "code"               => "BITGO_USDC",
                "active"             => "Y",
                "iso_code"           => "USDC",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "USDCERC20",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек USD Coin (USDC)",
                "round_for"          => "2",
                "sort"               => "981",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "1",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "5",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "ERC-20 (Ethereum)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/USDCERC20.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "USD Coin ERC20 (USDC)",
                        "wallet_name" => "Кошелек USD Coin (USDC)",
                        "text_in"     => ""
                    ],
                    "en" => [
                        "name"        => "USD Coin ERC20 (USDC)",
                        "wallet_name" => "USD Coin (USDC) wallet",
                        "text_in"     => "<p>Sending on another network will result in loss of funds.</p>"
                    ]
                ]
            ],
            [
                "id"                 => "102",
                "name"               => "Tether TRC20 (USDT)",
                "code"               => "WHITE_TRC20",
                "active"             => "Y",
                "iso_code"           => "USDT",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "USDTTRC20",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Tether TRC20 (USDT)",
                "round_for"          => "4",
                "sort"               => "985",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^T[1-9A-HJ-NP-Za-km-z]{33}$",
                "wallet_type"        => "15",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "TRC-20 (Tron)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/USDTTRC20.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Tether TRC20 (USDT)",
                        "wallet_name" => "Кошелек Tether TRC20 (USDT)"
                    ],
                    "en" => [
                        "name"        => "",
                        "wallet_name" => "Tether TRC20 (USDT) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "105",
                "name"               => "Tether ERC20 (USDT)",
                "code"               => "WHITE_ERC20",
                "active"             => "Y",
                "iso_code"           => "USDT",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "USDTERC20",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Tether ERC20 (USDT)",
                "round_for"          => "4",
                "sort"               => "990",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "15",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "<p>Отправка в другой сети приведет к потери средств.</p>",
                "text_out"           => "",
                "confirmations"      => "32",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "ERC-20 (Ethereum)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/USDTERC20.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Tether ERC20 (USDT)",
                        "wallet_name" => "Кошелек Tether ERC20 (USDT)",
                        "text_in"     => "<p>Отправка в другой сети приведет к потери средств.</p>"
                    ],
                    "en" => [
                        "name"        => "",
                        "wallet_name" => "Tether ERC20 (USDT) wallet",
                        "text_in"     => "<p>Sending on another network will result in loss of funds.</p>"
                    ]
                ]
            ],
            [
                "id"                 => "109",
                "name"               => "Ethereum (ETH)",
                "code"               => "WHITE_ETH",
                "active"             => "Y",
                "iso_code"           => "ETH",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "ETH",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Ethereum (ETH)",
                "round_for"          => "8",
                "sort"               => "980",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "15",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "<p>Убедитесь, что ваш кошелек или биржа не используют смарт-контракты для вывода ETH. Отправка таких транзакций приведет к потере средств. Если вы не уверены в способе вывода средств, то используйте личные кошельки для отправки или в качестве посредника.</p>\r\n<p>Отправка в другой сети приведет к потери средств.</p>",
                "text_out"           => "<p>Пожалуйста, убедитесь что вы не отправляете средства на смарт-контракт. Отправка таких транзакций может привести к потере средств. Если вы не уверены в этом, используйте персональные кошельки MEW или Metamask в качестве промежуточных.</p>",
                "confirmations"      => "32",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "ERC-20 (Ethereum)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ETH.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "text_out"    => "<p>Пожалуйста, убедитесь что вы не отправляете средства на смарт-контракт. Отправка таких транзакций может привести к потере средств. Если вы не уверены в этом, используйте персональные кошельки MEW или Metamask в качестве промежуточных.</p>",
                        "wallet_name" => "Кошелек Ethereum (ETH)",
                        "text_in"     => "<p>Убедитесь, что ваш кошелек или биржа не используют смарт-контракты для вывода ETH. Отправка таких транзакций приведет к потере средств. Если вы не уверены в способе вывода средств, то используйте личные кошельки для отправки или в качестве посредника.</p>\r\n<p>Отправка в другой сети приведет к потери средств.</p>"
                    ],
                    "en" => [
                        "text_out"    => "<p>Please make sure you are not sending funds to a smart contract. Sending such transactions may result in loss of funds. If you are unsure about this, use MEW or Metamask personal wallets as intermediate wallets.</p>",
                        "wallet_name" => "Ethereum (ETH) wallet",
                        "text_in"     => "<p>Make sure your wallet or exchange is not using smart contracts to withdraw ETH. Sending such transactions will result in a loss of funds. If you are not sure about the withdrawal method, then use your personal wallets for sending or as an intermediary.</p>\r\n<p>Sending on another network will result in loss of funds.</p>"
                    ]
                ]
            ],
            [
                "id"                 => "113",
                "name"               => "Tether TRC20 (USDT)",
                "code"               => "REAL_MONEY_TETHER_TRC",
                "active"             => "Y",
                "iso_code"           => "USDT",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "USDTTRC20",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Tether TRC20 (USDT)",
                "round_for"          => "4",
                "sort"               => "0",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "",
                "wallet_type"        => "10",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "0",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/USDTTRC20.svg",
                "walletIsCard"       => "N",
                "isCash"             => "Y",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "122",
                "name"               => "Tron (TRX)",
                "code"               => "WHITE_TRX",
                "active"             => "Y",
                "iso_code"           => "TRX",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "TRX",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Tron (TRX)",
                "round_for"          => "4",
                "sort"               => "0",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^T[1-9A-HJ-NP-Za-km-z]{33}$",
                "wallet_type"        => "15",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "20",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "TRX (Tron)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/TRX.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Tron (TRX)"
                    ],
                    "en" => [
                        "wallet_name" => "Tron (TRX) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "127",
                "name"               => "USD Coin (USDC TRC20)",
                "code"               => "WHITE_USDC_TRC20",
                "active"             => "Y",
                "iso_code"           => "USDC",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "USDCTRC20",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек USD Coin (USDC)",
                "round_for"          => "2",
                "sort"               => "982",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^T[1-9A-HJ-NP-Za-km-z]{33}$",
                "wallet_type"        => "15",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "20",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "TRC-20 (Tron)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/USDCTRC20.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек USD Coin (USDC)"
                    ],
                    "en" => [
                        "wallet_name" => "USD Coin (USDC TRC20) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "138",
                "name"               => "Polkadot (DOT)",
                "code"               => "WHITE_DOT",
                "active"             => "Y",
                "iso_code"           => "DOT",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "DOT",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Polkadot",
                "round_for"          => "2",
                "sort"               => "982",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(1)[0-9a-z-A-Z]{44,50}$",
                "wallet_type"        => "15",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "200",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "DOT (Polkadot)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/DOT.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Polkadot"
                    ],
                    "en" => [
                        "wallet_name" => "Polkadot (DOT) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "139",
                "name"               => "Tether TRC20 (USDT)",
                "code"               => "WHITE_CONVERT_USDT_TRC20",
                "active"             => "Y",
                "iso_code"           => "USDT",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "USDTTRC20",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Tether TRC20 (USDT)",
                "round_for"          => "4",
                "sort"               => "985",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^T[1-9A-HJ-NP-Za-km-z]{33}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "12",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "TRC-20 (Tron)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/USDTTRC20.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Tether TRC20 (USDT)"
                    ],
                    "en" => [
                        "wallet_name" => "Tether TRC20 (USDT) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "140",
                "name"               => "Litecoin (LTC)",
                "code"               => "WHITE_CONVERT_LTC",
                "active"             => "Y",
                "iso_code"           => "LTC",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "LTC",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Litecoin (LTC)",
                "round_for"          => "8",
                "sort"               => "970",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(L|M|3)[A-Za-z0-9]{33}$|^(ltc1)[0-9A-Za-z]{39}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "12",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "LTC (Litecoin)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/LTC.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Litecoin (LTC)"
                    ],
                    "en" => [
                        "wallet_name" => "Litecoin (LTC) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "141",
                "name"               => "Bitcoin (BTC)",
                "code"               => "WHITE_CONVERT_BTC",
                "active"             => "Y",
                "iso_code"           => "BTC",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "BTC",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Bitcoin",
                "round_for"          => "8",
                "sort"               => "1000",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^[13][a-km-zA-HJ-NP-Z1-9]{25,34}$|^[(bc1q)|(bc1p)][0-9A-Za-z]{37,62}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "2",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "BTC (Bitcoin)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/BTC.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Bitcoin"
                    ],
                    "en" => [
                        "wallet_name" => "Bitcoin (BTC) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "142",
                "name"               => "Bitcoin Cash (BCH)",
                "code"               => "WHITE_CONVERT_BCH",
                "active"             => "Y",
                "iso_code"           => "BCH",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "BCH",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Bitcoin Cash (BCH)",
                "round_for"          => "8",
                "sort"               => "800",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^[13][a-km-zA-HJ-NP-Z1-9]{25,34}$|^(bitcoincash:)?(q|p)[a-z0-9]{41}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "12",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "BCH (Bitcoin Cash)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/BCH.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Bitcoin Cash (BCH)"
                    ],
                    "en" => [
                        "wallet_name" => "Bitcoin Cash (BCH) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "143",
                "name"               => "Zcash (ZEC)",
                "code"               => "WHITE_CONVERT_ZEC",
                "active"             => "Y",
                "iso_code"           => "ZEC",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "ZEC",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Zcash (ZEC)",
                "round_for"          => "8",
                "sort"               => "500",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^t1[a-zA-Z0-9]{33}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "100",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "ZEC (Zcash)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ZEC.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Zcash (ZEC)"
                    ],
                    "en" => [
                        "wallet_name" => "Zcash (ZEC) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "144",
                "name"               => "Ripple (XRP)",
                "code"               => "WHITE_CONVERT_XRP",
                "active"             => "Y",
                "iso_code"           => "XRP",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "XRP",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Ripple (XRP)",
                "round_for"          => "8",
                "sort"               => "350",
                "group_id"           => "210",
                "tag_name"           => "Тег назначения",
                "address_regex"      => "^r[1-9A-HJ-NP-Za-km-z]{25,34}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "ID",
                "default_tag_value"  => "12345",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "3",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "XRP (Ripple)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/XRP.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "text_out"    => "",
                        "wallet_name" => "Кошелек Ripple (XRP)"
                    ],
                    "en" => [
                        "text_out"    => "<p>We send only to activated XRP wallets</p>",
                        "wallet_name" => "Ripple (XRP) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "145",
                "name"               => "Stellar (XLM)",
                "code"               => "WHITE_CONVERT_XLM",
                "active"             => "Y",
                "iso_code"           => "XLM",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "XLM",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Stellar (XLM)",
                "round_for"          => "8",
                "sort"               => "0",
                "group_id"           => "210",
                "tag_name"           => "Тег назначения",
                "address_regex"      => "^G[A-D]{1}[A-Z2-7]{54}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "ID",
                "default_tag_value"  => "12345",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "3",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "XLM (Stellar)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/XLM.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Stellar (XLM)"
                    ],
                    "en" => [
                        "wallet_name" => "Stellar (XLM) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "146",
                "name"               => "Monero (XMR)",
                "code"               => "WHITE_CONVERT_XMR",
                "active"             => "Y",
                "iso_code"           => "XMR",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "XMR",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "45",
                "wallet_name"        => "Кошелек Monero (XMR)",
                "round_for"          => "8",
                "sort"               => "200",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^[48][a-zA-Z|\\d]{94}([a-zA-Z|\\d]{11})?$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "12",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "XMR (Monero)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/XMR.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Monero (XMR)"
                    ],
                    "en" => [
                        "wallet_name" => "Monero (XMR) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "147",
                "name"               => "Dogecoin (DOGE)",
                "code"               => "WHITE_CONVERT_DOGE",
                "active"             => "Y",
                "iso_code"           => "DOGE",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "DOGE",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Dogecoin (DOGE)",
                "round_for"          => "8",
                "sort"               => "210",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(D|A|9)[a-km-zA-HJ-NP-Z1-9]{33,34}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "17",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "DOGE (Dogecoin)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/DOGE.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Dogecoin (DOGE)"
                    ],
                    "en" => [
                        "wallet_name" => "Dogecoin (DOGE) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "148",
                "name"               => "Ethereum Classic (ETC)",
                "code"               => "WHITE_CONVERT_ETC",
                "active"             => "Y",
                "iso_code"           => "ETC",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "ETC",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Ethereum Classic (ETC)",
                "round_for"          => "8",
                "sort"               => "200",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "302",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "ETC ( Ethereum Classic)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ETC.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Ethereum Classic (ETC)"
                    ],
                    "en" => [
                        "wallet_name" => "Ethereum Classic (ETC) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "149",
                "name"               => "Ethereum (ETH)",
                "code"               => "WHITE_CONVERT_ETH",
                "active"             => "Y",
                "iso_code"           => "ETH",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "ETH",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Ethereum (ETH)",
                "round_for"          => "8",
                "sort"               => "980",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "34",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "ERC-20 (Ethereum)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ETH.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Ethereum (ETH)"
                    ],
                    "en" => [
                        "wallet_name" => "Ethereum (ETH) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "151",
                "name"               => "Tron (TRX)",
                "code"               => "WHITE_CONVERT_TRX",
                "active"             => "Y",
                "iso_code"           => "TRX",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "TRX",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Tron (TRX)",
                "round_for"          => "4",
                "sort"               => "0",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^T[1-9A-HJ-NP-Za-km-z]{33}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "3",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "TRX (Tron)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/TRX.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Tron (TRX)"
                    ],
                    "en" => [
                        "wallet_name" => "Tron (TRX) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "152",
                "name"               => "Polkadot (DOT)",
                "code"               => "WHITE_CONVERT_DOT",
                "active"             => "Y",
                "iso_code"           => "DOT",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "DOT",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Polkadot",
                "round_for"          => "2",
                "sort"               => "982",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(1)[0-9a-z-A-Z]{44,50}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "202",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "DOT (Polkadot)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/DOT.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Polkadot"
                    ],
                    "en" => [
                        "wallet_name" => "Polkadot (DOT) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "153",
                "name"               => "Dash (DASH)",
                "code"               => "WHITE_CONVERT_DASH",
                "active"             => "Y",
                "iso_code"           => "DASH",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "DASH",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Dash (DASH)",
                "round_for"          => "8",
                "sort"               => "700",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^[X|7][0-9A-Za-z]{33}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "12",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "DASH (Dash)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/DASH.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Dash (DASH)"
                    ],
                    "en" => [
                        "wallet_name" => "Dash (DASH) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "154",
                "name"               => "Tether ERC20 (USDT)",
                "code"               => "WHITE_CONVERT_USDT_ERC20",
                "active"             => "Y",
                "iso_code"           => "USDT",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "USDTERC20",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Tether ERC20 (USDT)",
                "round_for"          => "4",
                "sort"               => "990",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "34",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "ERC-20 (Ethereum)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/USDTERC20.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Tether ERC20 (USDT)"
                    ],
                    "en" => [
                        "wallet_name" => "Tether ERC20 (USDT) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "159",
                "name"               => "USD Coin (USDC ERC20)",
                "code"               => "WHITE_CONVERT_USDC_ERC20",
                "active"             => "Y",
                "iso_code"           => "USDC",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "USDCERC20",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек USD Coin (USDC)",
                "round_for"          => "2",
                "sort"               => "982",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "34",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "ERC-20 (Ethereum)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/USDCERC20.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек USD Coin (USDC)"
                    ],
                    "en" => [
                        "wallet_name" => "USD Coin (USDC ERC20) wallet"
                    ]
                ]
            ],

            [
                "id"                 => "175",
                "name"               => "Solana (SOL)",
                "code"               => "WHITE_CONVERT_SOL",
                "active"             => "Y",
                "iso_code"           => "SOL",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "SOL",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Solana",
                "round_for"          => "6",
                "sort"               => "982",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^[1-9A-HJ-NP-Za-km-z]{32,44}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "502",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "SOL (Solana)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/SOL.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Solana"
                    ],
                    "en" => [
                        "wallet_name" => "Solana (SOL) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "176",
                "name"               => "Polygon (MATIC)",
                "code"               => "WHITE_CONVERT_MATIC",
                "active"             => "Y",
                "iso_code"           => "MATIC",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "MATIC",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Polygon",
                "round_for"          => "6",
                "sort"               => "982",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "862",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "MATIC (Polygon)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/MATIC.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Polygon"
                    ],
                    "en" => [
                        "wallet_name" => "Polygon (MATIC) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "177",
                "name"               => "Dai (DAI)",
                "code"               => "WHITE_CONVERT_DAI",
                "active"             => "Y",
                "iso_code"           => "DAI",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "DAI",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Dai",
                "round_for"          => "6",
                "sort"               => "982",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "34",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "ERC-20 (Ethereum)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/DAI.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Dai"
                    ],
                    "en" => [
                        "wallet_name" => "Dai (DAI) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "187",
                "name"               => "WhiteBIT Token TRC-20",
                "code"               => "WHITE_WBT_TRC20",
                "active"             => "Y",
                "iso_code"           => "WBT",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "WBT_TRC20_TEST",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек WhiteBIT Token TRC-20",
                "round_for"          => "8",
                "sort"               => "982",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^T[1-9A-HJ-NP-Za-km-z]{33}$",
                "wallet_type"        => "15",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "20",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "TRC-20  (Tron)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/WBT_TRC20_TEST.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек WhiteBIT Token TRC-20"
                    ],
                    "en" => [
                        "wallet_name" => "Wallet WhiteBIT Token TRC-20"
                    ]
                ]
            ],
            [
                "id"                 => "188",
                "name"               => "WhiteBIT Token ERC-20",
                "code"               => "WHITE_WBT_ERC20",
                "active"             => "Y",
                "iso_code"           => "WBT",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "WBT_ERC20_TEST",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек WhiteBIT Token ERC-20",
                "round_for"          => "8",
                "sort"               => "982",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "15",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "32",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "ERC-20 (Ethereum)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/WBT_ERC20_TEST.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек WhiteBIT Token ERC-20"
                    ],
                    "en" => [
                        "wallet_name" => "Wallet WhiteBIT Token ERC-20"
                    ]
                ]
            ],
            [
                "id"                 => "213",
                "name"               => "Dogecoin (DOGE)",
                "code"               => "BITGO_DOGE",
                "active"             => "Y",
                "iso_code"           => "DOGE",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "DOGE",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Dogecoin (DOGE)",
                "round_for"          => "8",
                "sort"               => "210",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(D|A|9)[a-km-zA-HJ-NP-Z1-9]{33,34}$",
                "wallet_type"        => "1",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "5",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "DOGE (Dogecoin)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/DOGE.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "220",
                "name"               => "Ethereum Optimism (ETH)",
                "code"               => "WHITE_CONVERT_ETH_OP",
                "active"             => "Y",
                "iso_code"           => "ETH",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "ETHOP",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Ethereum Optimism (ETH)",
                "round_for"          => "8",
                "sort"               => "980",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1402",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "Optimism",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ETHOP.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Ethereum Optimism (ETH)"
                    ],
                    "en" => [
                        "wallet_name" => "Ethereum Optimism (ETH) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "221",
                "name"               => "Ethereum Arbitrum (ETH)",
                "code"               => "WHITE_CONVERT_ETH_ARB",
                "active"             => "Y",
                "iso_code"           => "ETH",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "ETHARB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Ethereum Arbitrum One(ETH)",
                "round_for"          => "8",
                "sort"               => "980",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "602",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "Arbitrum One",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ETHARB.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Ethereum Arbitrum One(ETH)"
                    ],
                    "en" => [
                        "wallet_name" => "Ethereum Arbitrum (ETH) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "222",
                "name"               => "Arbitrum one (ARB)",
                "code"               => "WHITE_CONVERT_ARB",
                "active"             => "Y",
                "iso_code"           => "ARB",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "ARB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Arbitrum One(ARB)",
                "round_for"          => "8",
                "sort"               => "980",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "602",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "Arbitrum One",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ARB.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Arbitrum One(ARB)"
                    ],
                    "en" => [
                        "wallet_name" => "Arbitrum one (ARB) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "226",
                "name"               => "Dai (DAI)",
                "code"               => "BITGO_DAI",
                "active"             => "Y",
                "iso_code"           => "DAI",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "DAI",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Dai",
                "round_for"          => "6",
                "sort"               => "982",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "1",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "32",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "ERC-20 (Ethereum)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/DAI.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "text_in" => ""
                    ],
                    "en" => [
                        "text_in" => "<p>Sending on another network will result in loss of funds.</p>"
                    ]
                ]
            ],
            [
                "id"                 => "227",
                "name"               => "Сбербанк RUB",
                "code"               => "IVANPAY_SBER",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "SBERRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Сбербанк",
                "round_for"          => "2",
                "sort"               => "2000",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/SBERRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Сбербанк RUB",
                        "wallet_name" => "Карта Сбербанк"
                    ],
                    "en" => [
                        "name"        => "Sberbank RUB",
                        "wallet_name" => "Card Sberbank RUB"
                    ]
                ]
            ],
            [
                "id"                 => "228",
                "name"               => "Т-Банк",
                "code"               => "IVANPAY_TCSB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "TCSBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Т-Банка",
                "round_for"          => "2",
                "sort"               => "1400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/TCSBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Т-Банк",
                        "wallet_name" => "Карта Т-Банка"
                    ],
                    "en" => [
                        "name"        => "T-Bank RUB",
                        "wallet_name" => "Card T-Bank RUB"
                    ]
                ]
            ],
            [
                "id"                 => "229",
                "name"               => "Альфа-Банк RUB",
                "code"               => "IVANPAY_AC",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "ACRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Альфа-Банк",
                "round_for"          => "2",
                "sort"               => "1350",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ACRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Альфа-Банк RUB",
                        "wallet_name" => "Карта Альфа-Банк"
                    ],
                    "en" => [
                        "name"        => " Alfa-Bank RUB",
                        "wallet_name" => "Card Alfa-Bank RUB"
                    ]
                ]
            ],
            [
                "id"                 => "230",
                "name"               => "РНКБ",
                "code"               => "IVANPAY_RNKB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "RNKBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта РНКБ",
                "round_for"          => "2",
                "sort"               => "356",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/RNKBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "РНКБ",
                        "wallet_name" => "Карта РНКБ"
                    ],
                    "en" => [
                        "name"        => "RNKB RUB",
                        "wallet_name" => "Card RNKB RUB"
                    ]
                ]
            ],
            [
                "id"                 => "231",
                "name"               => "Открытие",
                "code"               => "IVANPAY_OPNB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "OPNBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Открытие",
                "round_for"          => "2",
                "sort"               => "768",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/OPNBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Открытие",
                        "wallet_name" => "Карта Открытие"
                    ],
                    "en" => [
                        "name"        => "Open RUB",
                        "wallet_name" => "Card Open RUB"
                    ]
                ]
            ],
            [
                "id"                 => "232",
                "name"               => "Русский Стандарт",
                "code"               => "IVANPAY_RUSST",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "RUSSTRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Русский Стандарт",
                "round_for"          => "2",
                "sort"               => "567",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/RUSSTRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Русский Стандарт",
                        "wallet_name" => "Карта Русский Стандарт"
                    ],
                    "en" => [
                        "name"        => "Russian Standard",
                        "wallet_name" => "Card Russian Standard RUB"
                    ]
                ]
            ],
            [
                "id"                 => "233",
                "name"               => "Авангард",
                "code"               => "IVANPAY_AVB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "AVBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Авангард",
                "round_for"          => "2",
                "sort"               => "456",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/AVBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Авангард",
                        "wallet_name" => "Карта Авангард"
                    ],
                    "en" => [
                        "name"        => "Avangard",
                        "wallet_name" => "Card Avangard RUB"
                    ]
                ]
            ],
            [
                "id"                 => "234",
                "name"               => "Райффайзен RUB",
                "code"               => "IVANPAY_RFB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "RFBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Райффайзен",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/RFBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Райффайзен RUB",
                        "wallet_name" => "Карта Райффайзен"
                    ],
                    "en" => [
                        "name"        => "Raiffeisen RUB",
                        "wallet_name" => "Card Raiffeisen RUB"
                    ]
                ]
            ],
            [
                "id"                 => "235",
                "name"               => "Газпромбанк",
                "code"               => "IVANPAY_GPB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "GPBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Газпромбанк",
                "round_for"          => "2",
                "sort"               => "457",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/GPBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Газпромбанк",
                        "wallet_name" => "Карта Газпромбанк"
                    ],
                    "en" => [
                        "name"        => "Gazprombank",
                        "wallet_name" => "Card Gazprombank RUB"
                    ]
                ]
            ],
            [
                "id"                 => "236",
                "name"               => "Почта банк",
                "code"               => "IVANPAY_POSTB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "POSTBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Почта банка",
                "round_for"          => "2",
                "sort"               => "1300",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/POSTBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Почта банк",
                        "wallet_name" => "Карта Почта банка"
                    ],
                    "en" => [
                        "name"        => "Pochta Bank",
                        "wallet_name" => "Card Pochta Bank"
                    ]
                ]
            ],
            [
                "id"                 => "237",
                "name"               => "Россельхозбанк",
                "code"               => "IVANPAY_RSHB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "RSHBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Россельхозбанка",
                "round_for"          => "2",
                "sort"               => "1300",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/RSHBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Россельхозбанк",
                        "wallet_name" => "Карта Россельхозбанка"
                    ],
                    "en" => [
                        "name"        => "RSHB",
                        "wallet_name" => "Card RSHB"
                    ]
                ]
            ],
            [
                "id"                 => "238",
                "name"               => "Росбанк",
                "code"               => "IVANPAY_ROSB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "ROSBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Росбанка",
                "round_for"          => "2",
                "sort"               => "1300",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ROSBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Росбанк",
                        "wallet_name" => "Карта Росбанка"
                    ],
                    "en" => [
                        "name"        => "Rosbank RUB",
                        "wallet_name" => "Card Rosbank RUB"
                    ]
                ]
            ],
            [
                "id"                 => "241",
                "name"               => "Binance Coin (BNB BEP20)",
                "code"               => "TWINKLEPICK_BNB20",
                "active"             => "Y",
                "iso_code"           => "BNB",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "BNBBEP20",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Binance Coin (BNB)",
                "round_for"          => "8",
                "sort"               => "400",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(0x)[0-9A-Fa-f]{40}$",
                "wallet_type"        => "31",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "При отправке Binance coin (BNB) указывайте сеть BEP20 (BSC)",
                "text_out"           => "",
                "confirmations"      => "60",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "BEP-20 (BSC)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/BNBBEP20.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "text_in"     => "При отправке Binance coin (BNB) указывайте сеть BEP20 (BSC)",
                        "wallet_name" => "Кошелек Binance Coin (BNB)"
                    ],
                    "en" => [
                        "text_in"     => "When sending Binance coin (BNB), specify the BEP20 (BSC) network",
                        "wallet_name" => "Binance Coin (BNB) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "243",
                "name"               => "Тинькофф",
                "code"               => "FIREPAY_TINKOFF",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "TCSBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Тинькофф",
                "round_for"          => "2",
                "sort"               => "1400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "34",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/TCSBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "244",
                "name"               => "Сбербанк RUB",
                "code"               => "FIREPAY_SBERBANK",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "SBERRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Сбербанк",
                "round_for"          => "2",
                "sort"               => "2000",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "34",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/SBERRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "245",
                "name"               => "Альфа-Банк RUB",
                "code"               => "FIREPAY_ALFABANK",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "ACRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Альфа-Банк",
                "round_for"          => "2",
                "sort"               => "1350",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "34",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ACRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "246",
                "name"               => "Tether TRC20 (USDT)",
                "code"               => "TWINKLEPICK_USDT_TRC20",
                "active"             => "Y",
                "iso_code"           => "USDT",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "USDTTRC20",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Tether TRC20 (USDT)",
                "round_for"          => "4",
                "sort"               => "985",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^T[1-9A-HJ-NP-Za-km-z]{33}$",
                "wallet_type"        => "31",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "TRC-20 (Tron)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/USDTTRC20.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "248",
                "name"               => "Tron (TRX)",
                "code"               => "TWINKLEPICK_TRX",
                "active"             => "Y",
                "iso_code"           => "TRX",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "TRX",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Tron (TRX)",
                "round_for"          => "4",
                "sort"               => "0",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^T[1-9A-HJ-NP-Za-km-z]{33}$",
                "wallet_type"        => "31",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "20",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "TRX (Tron)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/TRX.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "252",
                "name"               => "Промсвязьбанк",
                "code"               => "IVANPAY_PSB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "PSBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Промсвязьбанк",
                "round_for"          => "2",
                "sort"               => "670",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/PSBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Промсвязьбанк",
                        "wallet_name" => "Карта Промсвязьбанк"
                    ],
                    "en" => [
                        "name"        => "PSB",
                        "wallet_name" => "Card PSB"
                    ]
                ]
            ],
            [
                "id"                 => "253",
                "name"               => "Visa/MasterCard/Mir RUB",
                "code"               => "IVANPAY_CARD",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "CARDRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта RUB",
                "round_for"          => "2",
                "sort"               => "1370",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/CARDRUB.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],

            [
                "id"                 => "261",
                "name"               => "Visa/MasterCard KZT",
                "code"               => "FIREPAY_CARD_KZT",
                "active"             => "Y",
                "iso_code"           => "KZT",
                "balance"            => "267501.330000000000000",
                "type"               => "fiat",
                "best_code"          => "CARDKZT",
                "real_balance"       => "267501.330000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Visa/MasterCard KZT",
                "round_for"          => "2",
                "sort"               => "1350",
                "group_id"           => "217",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "34",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/CARDKZT.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "262",
                "name"               => "МТС Банк",
                "code"               => "IVANPAY_MTSB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "MTSBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта МТС Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/MTSBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "МТС Банк",
                        "wallet_name" => "Карта МТС Банк"
                    ],
                    "en" => [
                        "name"        => "MTS Bank",
                        "wallet_name" => "Card MTS Bank"
                    ]
                ]
            ],
            [
                "id"                 => "263",
                "name"               => "Совкомбанк",
                "code"               => "IVANPAY_SVCMB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "SVCMBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Совкомбанк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/SVCMBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Совкомбанк",
                        "wallet_name" => "Карта Совкомбанк"
                    ],
                    "en" => [
                        "name"        => "Sovcombank",
                        "wallet_name" => "Card Sovcombank"
                    ]
                ]
            ],
            [
                "id"                 => "264",
                "name"               => "Tether TRC20 (USDT)",
                "code"               => "TWINKLEPICK_USDT_TRC20_KZT",
                "active"             => "Y",
                "iso_code"           => "USDT",
                "balance"            => "9808.322800000000000",
                "type"               => "crypt",
                "best_code"          => "USDTTRC20",
                "real_balance"       => "9808.322839000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Tether TRC20 (USDT)",
                "round_for"          => "4",
                "sort"               => "985",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^T[1-9A-HJ-NP-Za-km-z]{33}$",
                "wallet_type"        => "31",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "TRC-20 (Tron)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/USDTTRC20.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "268",
                "name"               => "OZON Банк",
                "code"               => "IVANPAY_OZONB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "OZNRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта OZON Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/OZNRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "OZON Банк"
                    ],
                    "en" => [
                        "name" => "OZON Bank"
                    ]
                ]
            ],
            [
                "id"                 => "269",
                "name"               => "Kaspi Bank KZT",
                "code"               => "FIREPAY_KASPI_KZT",
                "active"             => "Y",
                "iso_code"           => "KZT",
                "balance"            => "267501.330000000000000",
                "type"               => "fiat",
                "best_code"          => "KSPBKZT",
                "real_balance"       => "267501.330000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Kaspi Bank KZT",
                "round_for"          => "2",
                "sort"               => "1350",
                "group_id"           => "217",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "34",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/KSPBKZT.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "270",
                "name"               => "HalykBank KZT",
                "code"               => "FIREPAY_HALYK_KZT",
                "active"             => "Y",
                "iso_code"           => "KZT",
                "balance"            => "267501.330000000000000",
                "type"               => "fiat",
                "best_code"          => "HLKBKZT",
                "real_balance"       => "267501.330000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта HalykBank KZT",
                "round_for"          => "2",
                "sort"               => "1350",
                "group_id"           => "217",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "34",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/HLKBKZT.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "271",
                "name"               => "Jusan Bank KZT",
                "code"               => "FIREPAY_JUSAN_KZT",
                "active"             => "Y",
                "iso_code"           => "KZT",
                "balance"            => "267501.330000000000000",
                "type"               => "fiat",
                "best_code"          => "JSNBKZT",
                "real_balance"       => "267501.330000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Jusan Bank KZT",
                "round_for"          => "2",
                "sort"               => "1350",
                "group_id"           => "217",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "34",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/JSNBKZT.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "272",
                "name"               => "Фридом Банк KZT",
                "code"               => "FIREPAY_FREEDOM_KZT",
                "active"             => "Y",
                "iso_code"           => "KZT",
                "balance"            => "267501.330000000000000",
                "type"               => "fiat",
                "best_code"          => "FFBKZT",
                "real_balance"       => "267501.330000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Фридом Банк KZT",
                "round_for"          => "2",
                "sort"               => "1350",
                "group_id"           => "217",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "34",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/FFBKZT.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "273",
                "name"               => "ForteBank KZT",
                "code"               => "FIREPAY_FORTE_KZT",
                "active"             => "Y",
                "iso_code"           => "KZT",
                "balance"            => "267501.330000000000000",
                "type"               => "fiat",
                "best_code"          => "FRTBKZT",
                "real_balance"       => "267501.330000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта ForteBank KZT",
                "round_for"          => "2",
                "sort"               => "1350",
                "group_id"           => "217",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "34",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/FRTBKZT.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "274",
                "name"               => "ЦентрКредит KZT",
                "code"               => "FIREPAY_CCB_KZT",
                "active"             => "Y",
                "iso_code"           => "KZT",
                "balance"            => "267501.330000000000000",
                "type"               => "fiat",
                "best_code"          => "CCBKZT",
                "real_balance"       => "267501.330000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта ЦентрКредит KZT",
                "round_for"          => "2",
                "sort"               => "1350",
                "group_id"           => "217",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "34",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/CCBKZT.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "275",
                "name"               => "Bereke Bank KZT",
                "code"               => "FIREPAY_BEREKE_KZT",
                "active"             => "Y",
                "iso_code"           => "KZT",
                "balance"            => "267501.330000000000000",
                "type"               => "fiat",
                "best_code"          => "BRBKZT",
                "real_balance"       => "267501.330000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Bereke Bank KZT",
                "round_for"          => "2",
                "sort"               => "1350",
                "group_id"           => "217",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "34",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/BRBKZT.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "276",
                "name"               => "Евразийский банк KZT",
                "code"               => "FIREPAY_ERSNB_KZT",
                "active"             => "Y",
                "iso_code"           => "KZT",
                "balance"            => "267501.330000000000000",
                "type"               => "fiat",
                "best_code"          => "ERSNBKZT",
                "real_balance"       => "267501.330000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Евразийский банк KZT",
                "round_for"          => "2",
                "sort"               => "1350",
                "group_id"           => "217",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "34",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ERSNBKZT.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "277",
                "name"               => "Ак Барс Банк",
                "code"               => "IVANPAY_AKBARSB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "AKBARSBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Ак Барс Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/AKBARSBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Ак Барс Банк"
                    ],
                    "en" => [
                        "name" => "Ak Bars Bank"
                    ]
                ]
            ],
            [
                "id"                 => "278",
                "name"               => "Toncoin (TON)",
                "code"               => "WHITE_CONVERT_TON",
                "active"             => "Y",
                "iso_code"           => "TON",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "TON",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Toncoin",
                "round_for"          => "8",
                "sort"               => "1000",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^[UE][Qf][0-9a-z-A-Z\\-\\_]{46}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "ID",
                "default_tag_value"  => "12345",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "Ton (Toncoin)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/TON.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Toncoin"
                    ],
                    "en" => [
                        "wallet_name" => "Toncoin (TON) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "279",
                "name"               => "Яндекс Банк",
                "code"               => "IVANPAY_YNDXB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "YNDXRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Яндекс Банка",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/YNDXRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name"        => "Яндекс Банк",
                        "wallet_name" => "Карта Яндекс Банка"
                    ],
                    "en" => [
                        "name"        => "Yandex Bank",
                        "wallet_name" => "Card Yandex Bank RUB"
                    ]
                ]
            ],
            [
                "id"                 => "280",
                "name"               => "Tether TON (USDT)",
                "code"               => "WHITE_CONVERT_USDT_TON",
                "active"             => "Y",
                "iso_code"           => "USDT",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "USDTTON",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Tether TON (USDT)",
                "round_for"          => "4",
                "sort"               => "985",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^[UE][Qf][0-9a-z-A-Z\\-\\_]{46}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "ID",
                "default_tag_value"  => "12345",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "TON (TON)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/USDTTON.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Tether TON (USDT)"
                    ],
                    "en" => [
                        "wallet_name" => "Tether TON (USDT) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "281",
                "name"               => "Toncoin (TON)",
                "code"               => "TWINKLEPICK_TON",
                "active"             => "Y",
                "iso_code"           => "TON",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "TON",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "45",
                "wallet_name"        => "Кошелек Toncoin (TON)",
                "round_for"          => "8",
                "sort"               => "200",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^[UE][Qf][0-9a-z-A-Z\\-\\_]{46}$",
                "wallet_type"        => "31",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "10",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "Toncoin (TON)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/TON.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N"
            ],
            [
                "id"                 => "282",
                "name"               => "Tether SOL (USDT)",
                "code"               => "WHITE_CONVERT_USDT_SOL",
                "active"             => "Y",
                "iso_code"           => "USDT",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "USDTSOL",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Tether SOL (USDT)",
                "round_for"          => "4",
                "sort"               => "985",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^[1-9A-HJ-NP-Za-km-z]{32,44}$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "500",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "SOL (SOL)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/USDTSOL.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек Tether SOL (USDT)"
                    ],
                    "en" => [
                        "wallet_name" => "Tether SOL (USDT) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "283",
                "name"               => "Cardano (ADA)",
                "code"               => "ADA",
                "active"             => "Y",
                "iso_code"           => "ADA",
                "balance"            => "0.000000000000000",
                "type"               => "crypt",
                "best_code"          => "ADA",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Кошелек Cardano (ADA)",
                "round_for"          => "2",
                "sort"               => "982",
                "group_id"           => "210",
                "tag_name"           => "",
                "address_regex"      => "^(([0-9A-Za-z]{57,59})|([0-9A-Za-z]{100,104}))$",
                "wallet_type"        => "20",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "500",
                "qiwi_fee_in"        => "0.00",
                "network_name"       => "Cardano (ADA)",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ADA.svg",
                "walletIsCard"       => "N",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "wallet_name" => "Кошелек USD Coin SOL (USDC)"
                    ],
                    "en" => [
                        "wallet_name" => "USD Coin (USDC SOL) wallet"
                    ]
                ]
            ],
            [
                "id"                 => "284",
                "name"               => "Уралсиб банк",
                "code"               => "IVANPAY_URSB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "URSBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Уралсиб Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/URSBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Уралсиб банк"
                    ],
                    "en" => [
                        "name" => "Uralsib Bank"
                    ]
                ]
            ],
            [
                "id"                 => "285",
                "name"               => "ОТП банк",
                "code"               => "IVANPAY_OTPB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "OTPBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта ОТП Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/OTPBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "ОТП банк"
                    ],
                    "en" => [
                        "name" => "OTP Bank"
                    ]
                ]
            ],
            [
                "id"                 => "286",
                "name"               => "УБРиР Банк",
                "code"               => "IVANPAY_UBRRB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "UBRRBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта УБРиР Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/UBRRBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "УБРиР Банк"
                    ],
                    "en" => [
                        "name" => "UBRR Bank"
                    ]
                ]
            ],
            [
                "id"                 => "287",
                "name"               => "Экспобанк",
                "code"               => "IVANPAY_EXPO",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "EXPORUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Экспобанк Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/EXPORUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Экспобанк"
                    ],
                    "en" => [
                        "name" => "Expobank"
                    ]
                ]
            ],
            [
                "id"                 => "288",
                "name"               => "Зенит Банк",
                "code"               => "IVANPAY_ZENIT",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "ZENITRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Зенит Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ZENITRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Зенит Банк"
                    ],
                    "en" => [
                        "name" => "Zenit Bank"
                    ]
                ]
            ],
            [
                "id"                 => "289",
                "name"               => "СКБ Примсоцбанк",
                "code"               => "IVANPAY_PRIMSOCBANK",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "PRIMSOCBANKRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Примсоцбанк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/PRIMSOCBANKRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "СКБ Примсоцбанк"
                    ],
                    "en" => [
                        "name" => "SKB Primsotsbank"
                    ]
                ]
            ],
            [
                "id"                 => "290",
                "name"               => "ЮниКредит Банк",
                "code"               => "IVANPAY_UNICREDITBANK",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "UNICREDITBANKRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта ЮниКредит Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/UNICREDITBANKRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "ЮниКредит Банк"
                    ],
                    "en" => [
                        "name" => "UniCredit Bank"
                    ]
                ]
            ],
            [
                "id"                 => "291",
                "name"               => "Банк Левобережный",
                "code"               => "IVANPAY_LVBRSHNB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "LVBRSHNBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Банк Левобережный",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/LVBRSHNBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Банк Левобережный"
                    ],
                    "en" => [
                        "name" => "Bank Levoberejniy"
                    ]
                ]
            ],
            [
                "id"                 => "292",
                "name"               => "БКС банк",
                "code"               => "IVANPAY_BCSB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "BCSBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта БКС банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/BCSBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "БКС банк"
                    ],
                    "en" => [
                        "name" => "BCS Bank"
                    ]
                ]
            ],
            [
                "id"                 => "293",
                "name"               => "Банк «Солидарность»",
                "code"               => "IVANPAY_SLDRTB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "SLDRTBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Банк «Солидарность»",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/SLDRTBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Банк «Солидарность»"
                    ],
                    "en" => [
                        "name" => "Bank «Solidarity»"
                    ]
                ]
            ],
            [
                "id"                 => "294",
                "name"               => "Сибсоцбанк",
                "code"               => "IVANPAY_SBSCB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "SBSCBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Сибсоцбанк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/SBSCBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Сибсоцбанк"
                    ],
                    "en" => [
                        "name" => "Sibsotsbank"
                    ]
                ]
            ],
            [
                "id"                 => "295",
                "name"               => "Абсолют Банк",
                "code"               => "IVANPAY_ABSLTB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "ABSLTBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Абсолют Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ABSLTBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Абсолют Банк"
                    ],
                    "en" => [
                        "name" => "Absolut Bank"
                    ]
                ]
            ],
            [
                "id"                 => "296",
                "name"               => "Фора Банк",
                "code"               => "IVANPAY_FORA",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "FORARUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Фора Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/FORARUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Фора Банк"
                    ],
                    "en" => [
                        "name" => "Fora Bank"
                    ]
                ]
            ],
            [
                "id"                 => "297",
                "name"               => "Юнистрим Банк",
                "code"               => "IVANPAY_UNISTREAM",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "UNISTREAMRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Юнистрим Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/UNISTREAMRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Юнистрим Банк"
                    ],
                    "en" => [
                        "name" => "Unistream Bank"
                    ]
                ]
            ],
            [
                "id"                 => "298",
                "name"               => "Цифра банк",
                "code"               => "IVANPAY_CIFRAB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "CIFRABRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Цифра Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/CIFRABRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Цифра банк"
                    ],
                    "en" => [
                        "name" => "Cifra Bank"
                    ]
                ]
            ],
            [
                "id"                 => "299",
                "name"               => "Азиатско-Тихоокеанский Банк",
                "code"               => "IVANPAY_ATB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "ATBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Азиатско-Тихоокеанский Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ATBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Азиатско-Тихоокеанский Банк"
                    ],
                    "en" => [
                        "name" => "Asia Pacific Bank"
                    ]
                ]
            ],
            [
                "id"                 => "300",
                "name"               => "СДМ-Банк",
                "code"               => "IVANPAY_SDMB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "SDMBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта СДМ-Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/SDMBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "СДМ-Банк"
                    ],
                    "en" => [
                        "name" => "SDM-Bank"
                    ]
                ]
            ],
            [
                "id"                 => "301",
                "name"               => "Свой Банк",
                "code"               => "IVANPAY_SVB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "SVBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Свой Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/SVBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Свой Банк"
                    ],
                    "en" => [
                        "name" => "Svoy Bank"
                    ]
                ]
            ],
            [
                "id"                 => "302",
                "name"               => "Ренессанс Банк",
                "code"               => "IVANPAY_RNSNSB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "RNSNSBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Ренессанс Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/RNSNSBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Ренессанс Банк"
                    ],
                    "en" => [
                        "name" => "Renaissance Bank"
                    ]
                ]
            ],
            [
                "id"                 => "303",
                "name"               => "Ингосстрах Банк",
                "code"               => "IVANPAY_INGOB",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "INGOBRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта Ингосстрах Банк",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/INGOBRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "Ингосстрах Банк"
                    ],
                    "en" => [
                        "name" => "Ingosstrakh Bank"
                    ]
                ]
            ],
            [
                "id"                 => "304",
                "name"               => "АКБ «Алмазэргиэнбанк» АО",
                "code"               => "IVANPAY_ALMAZERGIENBANK",
                "active"             => "Y",
                "iso_code"           => "RUB",
                "balance"            => "0.000000000000000",
                "type"               => "fiat",
                "best_code"          => "ALMAZERGIENBANKRUB",
                "real_balance"       => "0.000000000000000",
                "buy_time"           => "30",
                "wallet_name"        => "Карта АКБ «Алмазэргиэнбанк» АО",
                "round_for"          => "2",
                "sort"               => "400",
                "group_id"           => "212",
                "tag_name"           => "",
                "address_regex"      => "^[0-9]{16}$",
                "wallet_type"        => "140",
                "wallet_placeholder" => "",
                "tag_placeholder"    => "",
                "tag_type"           => "",
                "default_tag_value"  => "",
                "text_in"            => "",
                "text_out"           => "",
                "confirmations"      => "1",
                "qiwi_fee_in"        => "1.50",
                "network_name"       => "",
                "icon_url"           => "https://static.exhub.io/clients/images/currencies/ALMAZERGIENBANKRUB.svg",
                "walletIsCard"       => "Y",
                "isCash"             => "N",
                "isCNY"              => "N",
                "localization"       => [
                    "ru" => [
                        "name" => "АКБ «Алмазэргиэнбанк» АО"
                    ],
                    "en" => [
                        "name" => "AKB «Almazergienbank» AO"
                    ]
                ]
            ]
        ],
        "currenciesBanks" => [
            [
                "id"           => "227",
                "name"         => "Сбербанк RUB",
                "best_code"    => "SBERRUB",
                "code"         => "IVANPAY_SBER",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/SBERRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Сбербанк RUB"
                    ],
                    "en" => [
                        "name" => "Sberbank RUB"
                    ]
                ]
            ],
            [
                "id"           => "228",
                "name"         => "Т-Банк",
                "best_code"    => "TCSBRUB",
                "code"         => "IVANPAY_TCSB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/TCSBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Т-Банк"
                    ],
                    "en" => [
                        "name" => "T-Bank RUB"
                    ]
                ]
            ],
            [
                "id"           => "229",
                "name"         => "Альфа-Банк RUB",
                "best_code"    => "ACRUB",
                "code"         => "IVANPAY_AC",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/ACRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Альфа-Банк RUB"
                    ],
                    "en" => [
                        "name" => " Alfa-Bank RUB"
                    ]
                ]
            ],
            [
                "id"           => "230",
                "name"         => "РНКБ",
                "best_code"    => "RNKBRUB",
                "code"         => "IVANPAY_RNKB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/RNKBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "РНКБ"
                    ],
                    "en" => [
                        "name" => "RNKB RUB"
                    ]
                ]
            ],
            [
                "id"           => "231",
                "name"         => "Открытие",
                "best_code"    => "OPNBRUB",
                "code"         => "IVANPAY_OPNB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/OPNBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Открытие"
                    ],
                    "en" => [
                        "name" => "Open RUB"
                    ]
                ]
            ],
            [
                "id"           => "232",
                "name"         => "Русский Стандарт",
                "best_code"    => "RUSSTRUB",
                "code"         => "IVANPAY_RUSST",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/RUSSTRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Русский Стандарт"
                    ],
                    "en" => [
                        "name" => "Russian Standard"
                    ]
                ]
            ],
            [
                "id"           => "233",
                "name"         => "Авангард",
                "best_code"    => "AVBRUB",
                "code"         => "IVANPAY_AVB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/AVBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Авангард"
                    ],
                    "en" => [
                        "name" => "Avangard"
                    ]
                ]
            ],
            [
                "id"           => "234",
                "name"         => "Райффайзен RUB",
                "best_code"    => "RFBRUB",
                "code"         => "IVANPAY_RFB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/RFBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Райффайзен RUB"
                    ],
                    "en" => [
                        "name" => "Raiffeisen RUB"
                    ]
                ]
            ],
            [
                "id"           => "235",
                "name"         => "Газпромбанк",
                "best_code"    => "GPBRUB",
                "code"         => "IVANPAY_GPB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/GPBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Газпромбанк"
                    ],
                    "en" => [
                        "name" => "Gazprombank"
                    ]
                ]
            ],
            [
                "id"           => "236",
                "name"         => "Почта банк",
                "best_code"    => "POSTBRUB",
                "code"         => "IVANPAY_POSTB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/POSTBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Почта банк"
                    ],
                    "en" => [
                        "name" => "Pochta Bank"
                    ]
                ]
            ],
            [
                "id"           => "237",
                "name"         => "Россельхозбанк",
                "best_code"    => "RSHBRUB",
                "code"         => "IVANPAY_RSHB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/RSHBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Россельхозбанк"
                    ],
                    "en" => [
                        "name" => "RSHB"
                    ]
                ]
            ],
            [
                "id"           => "238",
                "name"         => "Росбанк",
                "best_code"    => "ROSBRUB",
                "code"         => "IVANPAY_ROSB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/ROSBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Росбанк"
                    ],
                    "en" => [
                        "name" => "Rosbank RUB"
                    ]
                ]
            ],
            [
                "id"           => "252",
                "name"         => "Промсвязьбанк",
                "best_code"    => "PSBRUB",
                "code"         => "IVANPAY_PSB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/PSBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Промсвязьбанк"
                    ],
                    "en" => [
                        "name" => "PSB"
                    ]
                ]
            ],
            [
                "id"           => "262",
                "name"         => "МТС Банк",
                "best_code"    => "MTSBRUB",
                "code"         => "IVANPAY_MTSB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/MTSBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "МТС Банк"
                    ],
                    "en" => [
                        "name" => "MTS Bank"
                    ]
                ]
            ],
            [
                "id"           => "263",
                "name"         => "Совкомбанк",
                "best_code"    => "SVCMBRUB",
                "code"         => "IVANPAY_SVCMB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/SVCMBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Совкомбанк"
                    ],
                    "en" => [
                        "name" => "Sovcombank"
                    ]
                ]
            ],
            [
                "id"           => "268",
                "name"         => "OZON Банк",
                "best_code"    => "OZNRUB",
                "code"         => "IVANPAY_OZONB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/OZNRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "OZON Банк"
                    ],
                    "en" => [
                        "name" => "OZON Bank"
                    ]
                ]
            ],
            [
                "id"           => "277",
                "name"         => "Ак Барс Банк",
                "best_code"    => "AKBARSBRUB",
                "code"         => "IVANPAY_AKBARSB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/AKBARSBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Ак Барс Банк"
                    ],
                    "en" => [
                        "name" => "Ak Bars Bank"
                    ]
                ]
            ],
            [
                "id"           => "279",
                "name"         => "Яндекс Банк",
                "best_code"    => "YNDXRUB",
                "code"         => "IVANPAY_YNDXB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/YNDXRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Яндекс Банк"
                    ],
                    "en" => [
                        "name" => "Yandex Bank"
                    ]
                ]
            ],
            [
                "id"           => "284",
                "name"         => "Уралсиб банк",
                "best_code"    => "URSBRUB",
                "code"         => "IVANPAY_URSB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/URSBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Уралсиб банк"
                    ],
                    "en" => [
                        "name" => "Uralsib Bank"
                    ]
                ]
            ],
            [
                "id"           => "285",
                "name"         => "ОТП банк",
                "best_code"    => "OTPBRUB",
                "code"         => "IVANPAY_OTPB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/OTPBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "ОТП банк"
                    ],
                    "en" => [
                        "name" => "OTP Bank"
                    ]
                ]
            ],
            [
                "id"           => "286",
                "name"         => "УБРиР Банк",
                "best_code"    => "UBRRBRUB",
                "code"         => "IVANPAY_UBRRB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/UBRRBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "УБРиР Банк"
                    ],
                    "en" => [
                        "name" => "UBRR Bank"
                    ]
                ]
            ],
            [
                "id"           => "287",
                "name"         => "Экспобанк",
                "best_code"    => "EXPORUB",
                "code"         => "IVANPAY_EXPO",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/EXPORUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Экспобанк"
                    ],
                    "en" => [
                        "name" => "Expobank"
                    ]
                ]
            ],
            [
                "id"           => "288",
                "name"         => "Зенит Банк",
                "best_code"    => "ZENITRUB",
                "code"         => "IVANPAY_ZENIT",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/ZENITRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Зенит Банк"
                    ],
                    "en" => [
                        "name" => "Zenit Bank"
                    ]
                ]
            ],
            [
                "id"           => "289",
                "name"         => "СКБ Примсоцбанк",
                "best_code"    => "PRIMSOCBANKRUB",
                "code"         => "IVANPAY_PRIMSOCBANK",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/PRIMSOCBANKRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "СКБ Примсоцбанк"
                    ],
                    "en" => [
                        "name" => "SKB Primsotsbank"
                    ]
                ]
            ],
            [
                "id"           => "290",
                "name"         => "ЮниКредит Банк",
                "best_code"    => "UNICREDITBANKRUB",
                "code"         => "IVANPAY_UNICREDITBANK",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/UNICREDITBANKRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "ЮниКредит Банк"
                    ],
                    "en" => [
                        "name" => "UniCredit Bank"
                    ]
                ]
            ],
            [
                "id"           => "291",
                "name"         => "Банк Левобережный",
                "best_code"    => "LVBRSHNBRUB",
                "code"         => "IVANPAY_LVBRSHNB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/LVBRSHNBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Банк Левобережный"
                    ],
                    "en" => [
                        "name" => "Bank Levoberejniy"
                    ]
                ]
            ],
            [
                "id"           => "292",
                "name"         => "БКС банк",
                "best_code"    => "BCSBRUB",
                "code"         => "IVANPAY_BCSB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/BCSBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "БКС банк"
                    ],
                    "en" => [
                        "name" => "BCS Bank"
                    ]
                ]
            ],
            [
                "id"           => "293",
                "name"         => "Банк «Солидарность»",
                "best_code"    => "SLDRTBRUB",
                "code"         => "IVANPAY_SLDRTB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/SLDRTBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Банк «Солидарность»"
                    ],
                    "en" => [
                        "name" => "Bank «Solidarity»"
                    ]
                ]
            ],
            [
                "id"           => "294",
                "name"         => "Сибсоцбанк",
                "best_code"    => "SBSCBRUB",
                "code"         => "IVANPAY_SBSCB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/SBSCBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Сибсоцбанк"
                    ],
                    "en" => [
                        "name" => "Sibsotsbank"
                    ]
                ]
            ],
            [
                "id"           => "295",
                "name"         => "Абсолют Банк",
                "best_code"    => "ABSLTBRUB",
                "code"         => "IVANPAY_ABSLTB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/ABSLTBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Абсолют Банк"
                    ],
                    "en" => [
                        "name" => "Absolut Bank"
                    ]
                ]
            ],
            [
                "id"           => "296",
                "name"         => "Фора Банк",
                "best_code"    => "FORARUB",
                "code"         => "IVANPAY_FORA",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/FORARUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Фора Банк"
                    ],
                    "en" => [
                        "name" => "Fora Bank"
                    ]
                ]
            ],
            [
                "id"           => "297",
                "name"         => "Юнистрим Банк",
                "best_code"    => "UNISTREAMRUB",
                "code"         => "IVANPAY_UNISTREAM",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/UNISTREAMRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Юнистрим Банк"
                    ],
                    "en" => [
                        "name" => "Unistream Bank"
                    ]
                ]
            ],
            [
                "id"           => "298",
                "name"         => "Цифра банк",
                "best_code"    => "CIFRABRUB",
                "code"         => "IVANPAY_CIFRAB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/CIFRABRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Цифра банк"
                    ],
                    "en" => [
                        "name" => "Cifra Bank"
                    ]
                ]
            ],
            [
                "id"           => "299",
                "name"         => "Азиатско-Тихоокеанский Банк",
                "best_code"    => "ATBRUB",
                "code"         => "IVANPAY_ATB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/ATBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Азиатско-Тихоокеанский Банк"
                    ],
                    "en" => [
                        "name" => "Asia Pacific Bank"
                    ]
                ]
            ],
            [
                "id"           => "300",
                "name"         => "СДМ-Банк",
                "best_code"    => "SDMBRUB",
                "code"         => "IVANPAY_SDMB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/SDMBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "СДМ-Банк"
                    ],
                    "en" => [
                        "name" => "SDM-Bank"
                    ]
                ]
            ],
            [
                "id"           => "301",
                "name"         => "Свой Банк",
                "best_code"    => "SVBRUB",
                "code"         => "IVANPAY_SVB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/SVBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Свой Банк"
                    ],
                    "en" => [
                        "name" => "Svoy Bank"
                    ]
                ]
            ],
            [
                "id"           => "302",
                "name"         => "Ренессанс Банк",
                "best_code"    => "RNSNSBRUB",
                "code"         => "IVANPAY_RNSNSB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/RNSNSBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Ренессанс Банк"
                    ],
                    "en" => [
                        "name" => "Renaissance Bank"
                    ]
                ]
            ],
            [
                "id"           => "303",
                "name"         => "Ингосстрах Банк",
                "best_code"    => "INGOBRUB",
                "code"         => "IVANPAY_INGOB",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/INGOBRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "Ингосстрах Банк"
                    ],
                    "en" => [
                        "name" => "Ingosstrakh Bank"
                    ]
                ]
            ],
            [
                "id"           => "304",
                "name"         => "АКБ «Алмазэргиэнбанк» АО",
                "best_code"    => "ALMAZERGIENBANKRUB",
                "code"         => "IVANPAY_ALMAZERGIENBANK",
                "icon_url"     => "https://static.exhub.io/clients/images/currencies/ALMAZERGIENBANKRUB.svg",
                "localization" => [
                    "ru" => [
                        "name" => "АКБ «Алмазэргиэнбанк» АО"
                    ],
                    "en" => [
                        "name" => "AKB «Almazergienbank» AO"
                    ]
                ]
            ]
        ],
        "currencyGroups"  => [
            [
                "id"           => "210",
                "name"         => "Криптовалюты",
                "sort"         => "110",
                "localization" => [
                    "ru" => [
                        "name" => "Криптовалюты"
                    ],
                    "en" => [
                        "name" => "Cryptocurrencies"
                    ]
                ]
            ],
            [
                "id"           => "211",
                "name"         => "Платёжные системы",
                "sort"         => "105",
                "localization" => [
                    "ru" => [
                        "name" => "Платёжные системы"
                    ],
                    "en" => [
                        "name" => "Digital currencies"
                    ]
                ]
            ],
            [
                "id"           => "212",
                "name"         => "Банки RUB",
                "sort"         => "100",
                "localization" => [
                    "ru" => [
                        "name" => "Банки RUB"
                    ],
                    "en" => [
                        "name" => "Online banking RUB"
                    ]
                ]
            ],
            [
                "id"           => "213",
                "name"         => "Наличные деньги",
                "sort"         => "95",
                "localization" => [
                    "ru" => [
                        "name" => "Наличные деньги"
                    ],
                    "en" => [
                        "name" => "Cash"
                    ]
                ]
            ],
            [
                "id"           => "214",
                "name"         => "Банки UAH",
                "sort"         => "97",
                "localization" => [
                    "ru" => [
                        "name" => "Банки UAH"
                    ],
                    "en" => [
                        "name" => "Online banking UAH"
                    ]
                ]
            ],
            [
                "id"           => "215",
                "name"         => "Банки EUR",
                "sort"         => "97",
                "localization" => [
                    "ru" => [
                        "name" => "Банки EUR"
                    ],
                    "en" => [
                        "name" => "Online banking EUR"
                    ]
                ]
            ],
            [
                "id"           => "216",
                "name"         => "Банки USD",
                "sort"         => "97",
                "localization" => [
                    "ru" => [
                        "name" => "Банки USD"
                    ],
                    "en" => [
                        "name" => "Online banking USD"
                    ]
                ]
            ],
            [
                "id"           => "217",
                "name"         => "Банки KZT",
                "sort"         => "97",
                "localization" => [
                    "ru" => [
                        "name" => "Банки KZT"
                    ],
                    "en" => [
                        "name" => "Online banking KZT"
                    ]
                ]
            ],
            [
                "id"   => "218",
                "name" => "CNY",
                "sort" => "97"
            ],
            [
                "id"           => "219",
                "name"         => "СБП",
                "sort"         => "111",
                "localization" => [
                    "ru" => [
                        "name" => "СБП"
                    ],
                    "en" => [
                        "name" => "SBP"
                    ]
                ]
            ],
            [
                "id"   => "220",
                "name" => "KZT",
                "sort" => "97"
            ]
        ],
        "currenciesFrom"  => [
            [
                "group_id" => "219",
                "list"     => [

                ]
            ],
            [
                "group_id" => "210",
                "list"     => [
                    [
                        "currency_id" => "141",
                        "best_code"   => "BTC",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "281",
                        "best_code"   => "TON",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "68",
                        "best_code"   => "USDTERC20",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "264",
                        "best_code"   => "USDTTRC20",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "280",
                        "best_code"   => "USDTTON",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "282",
                        "best_code"   => "USDTSOL",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "177",
                        "best_code"   => "DAI",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "152",
                        "best_code"   => "DOT",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "100",
                        "best_code"   => "USDCERC20",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "175",
                        "best_code"   => "SOL",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "283",
                        "best_code"   => "ADA",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "220",
                        "best_code"   => "ETHOP",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "221",
                        "best_code"   => "ETHARB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "222",
                        "best_code"   => "ARB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "67",
                        "best_code"   => "ETH",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "140",
                        "best_code"   => "LTC",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "142",
                        "best_code"   => "BCH",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "22",
                        "best_code"   => "DASH",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "143",
                        "best_code"   => "ZEC",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "241",
                        "best_code"   => "BNBBEP20",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "144",
                        "best_code"   => "XRP",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "147",
                        "best_code"   => "DOGE",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "146",
                        "best_code"   => "XMR",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "148",
                        "best_code"   => "ETC",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "76",
                        "best_code"   => "XLM",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "248",
                        "best_code"   => "TRX",
                        "disabled"    => "N"
                    ]
                ]
            ],
            [
                "group_id" => "212",
                "list"     => [
                    [
                        "currency_id" => "227",
                        "best_code"   => "SBERRUB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "228",
                        "best_code"   => "TCSBRUB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "253",
                        "best_code"   => "CARDRUB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "229",
                        "best_code"   => "ACRUB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "238",
                        "best_code"   => "ROSBRUB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "236",
                        "best_code"   => "POSTBRUB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "237",
                        "best_code"   => "RSHBRUB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "231",
                        "best_code"   => "OPNBRUB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "252",
                        "best_code"   => "PSBRUB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "232",
                        "best_code"   => "RUSSTRUB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "235",
                        "best_code"   => "GPBRUB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "233",
                        "best_code"   => "AVBRUB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "234",
                        "best_code"   => "RFBRUB",
                        "disabled"    => "N"
                    ],
                    [
                        "currency_id" => "230",
                        "best_code"   => "RNKBRUB",
                        "disabled"    => "N"
                    ]
                ]
            ],
            [
                "group_id" => "217",
                "list"     => [
                    [
                        "currency_id" => "270",
                        "best_code"   => "HLKBKZT",
                        "disabled"    => "Y"
                    ],
                    [
                        "currency_id" => "271",
                        "best_code"   => "JSNBKZT",
                        "disabled"    => "Y"
                    ],
                    [
                        "currency_id" => "272",
                        "best_code"   => "FFBKZT",
                        "disabled"    => "Y"
                    ],
                    [
                        "currency_id" => "273",
                        "best_code"   => "FRTBKZT",
                        "disabled"    => "Y"
                    ],
                    [
                        "currency_id" => "274",
                        "best_code"   => "CCBKZT",
                        "disabled"    => "Y"
                    ],
                    [
                        "currency_id" => "275",
                        "best_code"   => "BRBKZT",
                        "disabled"    => "Y"
                    ],
                    [
                        "currency_id" => "276",
                        "best_code"   => "ERSNBKZT",
                        "disabled"    => "Y"
                    ],
                    [
                        "currency_id" => "261",
                        "best_code"   => "CARDKZT",
                        "disabled"    => "Y"
                    ],
                    [
                        "currency_id" => "269",
                        "best_code"   => "KSPBKZT",
                        "disabled"    => "Y"
                    ]
                ]
            ]
        ],
        "currenciesTo"    => [


            [
                "currency_from_id"        => "1",
                "currency_from_best_code" => "BTC",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "722809",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "722810",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "722805",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "722811",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "722808",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "722806",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "722807",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "722799",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "722804",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "722800",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "722803",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "722801",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "722802",
                        "currency_id" => "234",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "722798",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "141",
                "currency_from_best_code" => "BTC",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496414",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496178",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1495983",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496454",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496496",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496046",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496195",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496227",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496259",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496541",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496307",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496341",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496376",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496043",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496009",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496029",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496143",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496031",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496033",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496039",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496037",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496041",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496035",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496044",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "278",
                "currency_from_best_code" => "TON",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496393",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496405",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496392",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496473",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496515",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496403",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496406",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496407",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496408",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496559",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496409",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496410",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496411",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496401",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496394",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496404",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496395",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496396",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496399",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496398",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496400",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496397",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496402",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],

            [
                "currency_from_id"        => "281",
                "currency_from_best_code" => "TON",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "299461",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "299462",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "299465",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "299463",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "299460",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "299458",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "299459",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "299453",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "299464",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "299454",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "299457",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "299455",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "299456",
                        "currency_id" => "234",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "299452",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "154",
                "currency_from_best_code" => "USDTERC20",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496425",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496165",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496221",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496467",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496509",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496175",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496219",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496251",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496283",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496553",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496318",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496352",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496387",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496173",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496164",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496166",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496176",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496167",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496168",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496171",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496170",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496172",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496169",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496174",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],

            [
                "currency_from_id"        => "68",
                "currency_from_best_code" => "USDTERC20",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "742843",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742844",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742839",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742845",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742842",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742840",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742841",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742833",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742838",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742834",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742837",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742835",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742836",
                        "currency_id" => "234",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742832",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],

            [
                "currency_from_id"        => "246",
                "currency_from_best_code" => "USDTTRC20",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "56721",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56722",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "169839",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56723",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56718",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56716",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56717",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56711",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56719",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56712",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56715",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56713",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56714",
                        "currency_id" => "234",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56710",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "139",
                "currency_from_best_code" => "USDTTRC20",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496412",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1495995",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496220",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496005",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496191",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496223",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496255",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496539",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496305",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496339",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496374",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496003",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1495994",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1495996",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496139",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1495997",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1495998",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496001",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496000",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496002",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1495999",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496004",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "264",
                "currency_from_best_code" => "USDTTRC20",
                "group_id"                => "217",
                "list"                    => [
                    [
                        "rateId"      => "689416",
                        "currency_id" => "270",
                        "disabled"    => "Y",
                        "f_balance"   => "259 476.29"
                    ],
                    [
                        "rateId"      => "689423",
                        "currency_id" => "271",
                        "disabled"    => "Y",
                        "f_balance"   => "259 476.29"
                    ],
                    [
                        "rateId"      => "689424",
                        "currency_id" => "272",
                        "disabled"    => "Y",
                        "f_balance"   => "259 476.29"
                    ],
                    [
                        "rateId"      => "689417",
                        "currency_id" => "273",
                        "disabled"    => "Y",
                        "f_balance"   => "259 476.29"
                    ],
                    [
                        "rateId"      => "689418",
                        "currency_id" => "274",
                        "disabled"    => "Y",
                        "f_balance"   => "259 476.29"
                    ],
                    [
                        "rateId"      => "689419",
                        "currency_id" => "275",
                        "disabled"    => "Y",
                        "f_balance"   => "259 476.29"
                    ],
                    [
                        "rateId"      => "689420",
                        "currency_id" => "276",
                        "disabled"    => "Y",
                        "f_balance"   => "259 476.29"
                    ],
                    [
                        "rateId"      => "689414",
                        "currency_id" => "261",
                        "disabled"    => "Y",
                        "f_balance"   => "259 476.29"
                    ],
                    [
                        "rateId"      => "689415",
                        "currency_id" => "269",
                        "disabled"    => "Y",
                        "f_balance"   => "259 476.29"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "280",
                "currency_from_best_code" => "USDTTON",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496452",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496433",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496446",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496443",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496445",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496447",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496448",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496560",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496449",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496450",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496451",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496441",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496432",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496434",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496444",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496435",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496436",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496439",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496438",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496440",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496437",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496442",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "282",
                "currency_from_best_code" => "USDTSOL",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496494",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496475",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496488",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496485",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496487",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496489",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496490",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496561",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496491",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496492",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496493",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496483",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496474",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496476",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496486",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496477",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496478",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496481",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496480",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496482",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496479",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496484",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "226",
                "currency_from_best_code" => "DAI",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "37128",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "454",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "169835",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "455",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "361",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "359",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "360",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "352",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "357",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "353",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "356",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "354",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "355",
                        "currency_id" => "234",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "351",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "177",
                "currency_from_best_code" => "DAI",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496428",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496258",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496282",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496254",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496469",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496511",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496278",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496284",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496286",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496555",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496321",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496355",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496390",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496274",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496256",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496260",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496280",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496262",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496264",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496270",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496268",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496272",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496266",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496276",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "152",
                "currency_from_best_code" => "DOT",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496423",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496047",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496188",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1495993",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496464",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496506",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496215",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496247",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496279",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496551",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496316",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496350",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496385",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496135",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496028",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496065",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496163",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496081",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496095",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496125",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496117",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496131",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496107",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496137",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "159",
                "currency_from_best_code" => "USDCERC20",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496426",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496194",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496218",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496190",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496466",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496508",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496214",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496253",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496285",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496319",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496353",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496388",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496210",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496192",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496196",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496216",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496198",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496200",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496206",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496204",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496208",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496202",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496212",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "100",
                "currency_from_best_code" => "USDCERC20",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "742873",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742874",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742869",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742875",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742872",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742870",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742871",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742863",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742868",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742864",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742867",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742865",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742866",
                        "currency_id" => "234",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742862",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "175",
                "currency_from_best_code" => "SOL",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496427",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496226",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496250",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496222",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496468",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496510",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496246",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496252",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496287",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496554",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496320",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496354",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496389",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496242",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496224",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496228",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496248",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496230",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496232",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496238",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496236",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496240",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496234",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496244",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "283",
                "currency_from_best_code" => "ADA",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496536",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496518",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496530",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496516",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496537",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496538",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496528",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496531",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496532",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496533",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496534",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496535",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496526",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496517",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496519",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496529",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496520",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496521",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496524",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496523",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496525",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496522",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496527",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "220",
                "currency_from_best_code" => "ETHOP",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496429",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496289",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496301",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496288",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496470",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496512",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496299",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496302",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496303",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496304",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496556",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496290",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496291",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496300",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496292",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496293",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496296",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496295",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496297",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496294",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496298",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "221",
                "currency_from_best_code" => "ETHARB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496430",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496323",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496335",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496322",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496471",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496513",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496333",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496336",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496337",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496338",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496557",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496324",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496325",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496334",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496326",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496327",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496330",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496329",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496331",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496328",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496332",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "222",
                "currency_from_best_code" => "ARB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496431",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496357",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496369",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496356",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496472",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496514",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496367",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496370",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496371",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496372",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496558",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496373",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496358",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496359",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496368",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496360",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496361",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496364",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496363",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496365",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496362",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496366",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "149",
                "currency_from_best_code" => "ETH",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496413",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496006",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496186",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1495991",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496462",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496504",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496134",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496211",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496243",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496275",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496549",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496391",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496007",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496061",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496159",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496077",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496091",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496121",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496113",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496127",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496103",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496132",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "67",
                "currency_from_best_code" => "ETH",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "742813",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742814",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742809",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742815",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742812",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742810",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742811",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742803",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742808",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742804",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742807",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742805",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742806",
                        "currency_id" => "234",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "742802",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "2",
                "currency_from_best_code" => "LTC",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "37116",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "431",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "169826",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "421",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "301",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "289",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "295",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "245",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "265",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "249",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "261",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "253",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "257",
                        "currency_id" => "234",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "241",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "140",
                "currency_from_best_code" => "LTC",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496008",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496177",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1495982",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496453",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496495",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496027",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496193",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496225",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496257",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496540",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496306",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496340",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496375",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496024",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496010",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496141",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496012",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496014",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496020",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496018",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496022",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496016",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496025",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "20",
                "currency_from_best_code" => "BCH",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "37117",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "433",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "169827",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "422",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "302",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "290",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "296",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "246",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "266",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "250",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "262",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "254",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "258",
                        "currency_id" => "234",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "242",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "142",
                "currency_from_best_code" => "BCH",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496415",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496030",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496179",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1495984",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496455",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496497",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496064",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496197",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496229",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496261",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496542",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496308",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496342",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496377",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496060",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496011",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496145",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496048",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496050",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496056",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496054",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496058",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496052",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496062",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "153",
                "currency_from_best_code" => "DASH",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496424",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496142",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496189",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496138",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496465",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496507",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496162",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496217",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496249",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496281",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496552",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496317",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496351",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496386",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496158",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496140",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496144",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496146",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496148",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496154",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496152",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496156",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496150",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496160",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "22",
                "currency_from_best_code" => "DASH",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "37118",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "434",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "169828",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "423",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "303",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "291",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "297",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "247",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "267",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "251",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "263",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "255",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],

                    [
                        "rateId"      => "243",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],

            [
                "currency_from_id"        => "21",
                "currency_from_best_code" => "ZEC",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "353646",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "353648",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "353642",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "353647",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "353645",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "353643",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "353644",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "353636",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "353641",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "353637",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "353640",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "353638",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "353639",
                        "currency_id" => "234",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "353635",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "143",
                "currency_from_best_code" => "ZEC",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496416",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496032",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496180",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1495985",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496456",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496498",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496080",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496199",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496231",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496263",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496543",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496309",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496343",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496378",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496076",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496013",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496049",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496147",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496066",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496072",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496070",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496074",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496068",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496078",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],

            [
                "currency_from_id"        => "241",
                "currency_from_best_code" => "BNBBEP20",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496414",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496178",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1495983",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496454",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496496",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496046",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496195",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496227",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496259",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496541",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496307",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496341",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496376",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496043",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496009",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496029",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496143",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496031",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496033",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496039",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496037",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496041",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496035",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496044",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],

            [
                "currency_from_id"        => "74",
                "currency_from_best_code" => "XRP",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "37120",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14988",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "169830",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14987",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14985",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14983",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14984",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14976",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14981",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14977",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14980",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14978",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14979",
                        "currency_id" => "234",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14975",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "144",
                "currency_from_best_code" => "XRP",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496417",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496034",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496181",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1495986",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496457",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496499",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496094",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496201",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496233",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496265",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496544",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496310",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496344",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496379",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496090",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496015",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496051",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496149",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496067",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496086",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496084",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496088",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496082",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496092",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],

            [
                "currency_from_id"        => "213",
                "currency_from_best_code" => "DOGE",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "37127",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14223",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "169834",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14222",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14220",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14218",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14219",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14211",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14216",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14212",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14215",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14213",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14214",
                        "currency_id" => "234",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "14210",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "147",
                "currency_from_best_code" => "DOGE",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496420",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496040",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496184",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1495989",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496460",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496502",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496124",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496207",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496239",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496271",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496547",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496313",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496347",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496382",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496120",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496021",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496057",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496155",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496073",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496087",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496109",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496118",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496099",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496122",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "146",
                "currency_from_best_code" => "XMR",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496419",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496038",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496183",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1495988",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496459",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496501",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496116",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496205",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496237",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496269",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496546",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496312",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496346",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496381",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496112",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496019",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496055",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496153",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496071",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496085",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496108",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496110",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496097",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496114",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "148",
                "currency_from_best_code" => "ETC",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496421",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496042",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496185",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1495990",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496461",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496503",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496130",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496209",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496241",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496273",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496548",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496314",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496348",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496383",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496126",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496023",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496059",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496157",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496075",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496089",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496119",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496111",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496101",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ],
                    [
                        "rateId"      => "1496128",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "145",
                "currency_from_best_code" => "XLM",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496418",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496036",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496182",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1495987",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496458",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496500",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496106",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496203",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496235",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496267",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496545",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496311",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496345",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496380",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496102",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496017",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496053",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496151",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496069",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496083",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496098",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496096",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496100",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496104",
                        "currency_id" => "151",
                        "disabled"    => "N",
                        "f_balance"   => "1 329 675.24"
                    ]
                ]
            ],

            [
                "currency_from_id"        => "76",
                "currency_from_best_code" => "XLM",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "37121",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "437",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "169831",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "428",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "306",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "294",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "300",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "282",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "287",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "283",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "286",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "284",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "285",
                        "currency_id" => "234",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "281",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "151",
                "currency_from_best_code" => "TRX",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496422",
                        "currency_id" => "278",
                        "disabled"    => "N",
                        "f_balance"   => "109 329.42"
                    ],
                    [
                        "rateId"      => "1496045",
                        "currency_id" => "141",
                        "disabled"    => "N",
                        "f_balance"   => "3.703086"
                    ],
                    [
                        "rateId"      => "1496187",
                        "currency_id" => "154",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1495992",
                        "currency_id" => "139",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496463",
                        "currency_id" => "280",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496505",
                        "currency_id" => "282",
                        "disabled"    => "N",
                        "f_balance"   => "300 000"
                    ],
                    [
                        "rateId"      => "1496136",
                        "currency_id" => "152",
                        "disabled"    => "N",
                        "f_balance"   => "75 681.13"
                    ],
                    [
                        "rateId"      => "1496213",
                        "currency_id" => "159",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496245",
                        "currency_id" => "175",
                        "disabled"    => "N",
                        "f_balance"   => "2 420.6901"
                    ],
                    [
                        "rateId"      => "1496277",
                        "currency_id" => "177",
                        "disabled"    => "N",
                        "f_balance"   => "299 610.48"
                    ],
                    [
                        "rateId"      => "1496550",
                        "currency_id" => "283",
                        "disabled"    => "N",
                        "f_balance"   => "300 060.01"
                    ],
                    [
                        "rateId"      => "1496315",
                        "currency_id" => "220",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496349",
                        "currency_id" => "221",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496384",
                        "currency_id" => "222",
                        "disabled"    => "N",
                        "f_balance"   => "875 401.2255"
                    ],
                    [
                        "rateId"      => "1496133",
                        "currency_id" => "149",
                        "disabled"    => "N",
                        "f_balance"   => "160.05207"
                    ],
                    [
                        "rateId"      => "1496026",
                        "currency_id" => "140",
                        "disabled"    => "N",
                        "f_balance"   => "3 392.51385"
                    ],
                    [
                        "rateId"      => "1496063",
                        "currency_id" => "142",
                        "disabled"    => "N",
                        "f_balance"   => "905.76975"
                    ],
                    [
                        "rateId"      => "1496161",
                        "currency_id" => "153",
                        "disabled"    => "N",
                        "f_balance"   => "13 679.89056"
                    ],
                    [
                        "rateId"      => "1496079",
                        "currency_id" => "143",
                        "disabled"    => "N",
                        "f_balance"   => "10 006.67109"
                    ],
                    [
                        "rateId"      => "1496093",
                        "currency_id" => "144",
                        "disabled"    => "N",
                        "f_balance"   => "130 396.5"
                    ],
                    [
                        "rateId"      => "1496123",
                        "currency_id" => "147",
                        "disabled"    => "N",
                        "f_balance"   => "1 805 514"
                    ],
                    [
                        "rateId"      => "1496115",
                        "currency_id" => "146",
                        "disabled"    => "N",
                        "f_balance"   => "1 457.79678"
                    ],
                    [
                        "rateId"      => "1496129",
                        "currency_id" => "148",
                        "disabled"    => "N",
                        "f_balance"   => "16 703.13"
                    ],
                    [
                        "rateId"      => "1496105",
                        "currency_id" => "145",
                        "disabled"    => "N",
                        "f_balance"   => "1 075 268.7"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "248",
                "currency_from_best_code" => "TRX",
                "group_id"                => "212",
                "list"                    => [
                    [
                        "rateId"      => "56545",
                        "currency_id" => "227",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56546",
                        "currency_id" => "228",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "169840",
                        "currency_id" => "253",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56547",
                        "currency_id" => "229",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56542",
                        "currency_id" => "238",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56540",
                        "currency_id" => "236",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56541",
                        "currency_id" => "237",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56535",
                        "currency_id" => "231",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56543",
                        "currency_id" => "252",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56536",
                        "currency_id" => "232",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56539",
                        "currency_id" => "235",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56537",
                        "currency_id" => "233",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56538",
                        "currency_id" => "234",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ],
                    [
                        "rateId"      => "56534",
                        "currency_id" => "230",
                        "disabled"    => "N",
                        "f_balance"   => "9 541 749"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "227",
                "currency_from_best_code" => "SBERRUB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "722794",
                        "currency_id" => "1",
                        "disabled"    => "N",
                        "f_balance"   => "0.1970871"
                    ],
                    [
                        "rateId"      => "742828",
                        "currency_id" => "68",
                        "disabled"    => "N",
                        "f_balance"   => "6 081.57"
                    ],
                    [
                        "rateId"      => "56706",
                        "currency_id" => "246",
                        "disabled"    => "N",
                        "f_balance"   => "17 720.6057"
                    ],
                    [
                        "rateId"      => "37112",
                        "currency_id" => "226",
                        "disabled"    => "N",
                        "f_balance"   => "4 096.721222"
                    ],
                    [
                        "rateId"      => "742858",
                        "currency_id" => "100",
                        "disabled"    => "N",
                        "f_balance"   => "7 714.37"
                    ],
                    [
                        "rateId"      => "742798",
                        "currency_id" => "67",
                        "disabled"    => "N",
                        "f_balance"   => "6.13842907"
                    ],
                    [
                        "rateId"      => "37100",
                        "currency_id" => "2",
                        "disabled"    => "N",
                        "f_balance"   => "37.9315888"
                    ],
                    [
                        "rateId"      => "37101",
                        "currency_id" => "20",
                        "disabled"    => "N",
                        "f_balance"   => "28.34634561"
                    ],
                    [
                        "rateId"      => "37102",
                        "currency_id" => "22",
                        "disabled"    => "N",
                        "f_balance"   => "405.90322285"
                    ],
                    [
                        "rateId"      => "353631",
                        "currency_id" => "21",
                        "disabled"    => "N",
                        "f_balance"   => "47.08354839"
                    ],
                    [
                        "rateId"      => "56574",
                        "currency_id" => "241",
                        "disabled"    => "N",
                        "f_balance"   => "7.31215797"
                    ],
                    [
                        "rateId"      => "37104",
                        "currency_id" => "74",
                        "disabled"    => "N",
                        "f_balance"   => "3 951.6184756"
                    ],
                    [
                        "rateId"      => "37111",
                        "currency_id" => "213",
                        "disabled"    => "N",
                        "f_balance"   => "32 769.33002656"
                    ],
                    [
                        "rateId"      => "299446",
                        "currency_id" => "281",
                        "disabled"    => "N",
                        "f_balance"   => "1 105.70965492"
                    ],
                    [
                        "rateId"      => "37105",
                        "currency_id" => "76",
                        "disabled"    => "N",
                        "f_balance"   => "10 628.8804671"
                    ],
                    [
                        "rateId"      => "56530",
                        "currency_id" => "248",
                        "disabled"    => "N",
                        "f_balance"   => "17 736.2966"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "228",
                "currency_from_best_code" => "TCSBRUB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "722795",
                        "currency_id" => "1",
                        "disabled"    => "N",
                        "f_balance"   => "0.1970871"
                    ],
                    [
                        "rateId"      => "742829",
                        "currency_id" => "68",
                        "disabled"    => "N",
                        "f_balance"   => "6 081.57"
                    ],
                    [
                        "rateId"      => "56707",
                        "currency_id" => "246",
                        "disabled"    => "N",
                        "f_balance"   => "17 720.6057"
                    ],
                    [
                        "rateId"      => "214",
                        "currency_id" => "226",
                        "disabled"    => "N",
                        "f_balance"   => "4 096.721222"
                    ],
                    [
                        "rateId"      => "742859",
                        "currency_id" => "100",
                        "disabled"    => "N",
                        "f_balance"   => "7 714.37"
                    ],
                    [
                        "rateId"      => "742799",
                        "currency_id" => "67",
                        "disabled"    => "N",
                        "f_balance"   => "6.13842907"
                    ],
                    [
                        "rateId"      => "191",
                        "currency_id" => "2",
                        "disabled"    => "N",
                        "f_balance"   => "37.9315888"
                    ],
                    [
                        "rateId"      => "193",
                        "currency_id" => "20",
                        "disabled"    => "N",
                        "f_balance"   => "28.34634561"
                    ],
                    [
                        "rateId"      => "194",
                        "currency_id" => "22",
                        "disabled"    => "N",
                        "f_balance"   => "405.90322285"
                    ],
                    [
                        "rateId"      => "353633",
                        "currency_id" => "21",
                        "disabled"    => "N",
                        "f_balance"   => "47.08354839"
                    ],
                    [
                        "rateId"      => "56575",
                        "currency_id" => "241",
                        "disabled"    => "N",
                        "f_balance"   => "7.31215797"
                    ],
                    [
                        "rateId"      => "14973",
                        "currency_id" => "74",
                        "disabled"    => "N",
                        "f_balance"   => "3 951.6184756"
                    ],
                    [
                        "rateId"      => "14208",
                        "currency_id" => "213",
                        "disabled"    => "N",
                        "f_balance"   => "32 769.33002656"
                    ],
                    [
                        "rateId"      => "299447",
                        "currency_id" => "281",
                        "disabled"    => "N",
                        "f_balance"   => "1 105.70965492"
                    ],
                    [
                        "rateId"      => "197",
                        "currency_id" => "76",
                        "disabled"    => "N",
                        "f_balance"   => "10 628.8804671"
                    ],
                    [
                        "rateId"      => "56531",
                        "currency_id" => "248",
                        "disabled"    => "N",
                        "f_balance"   => "17 736.2966"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "253",
                "currency_from_best_code" => "CARDRUB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "722790",
                        "currency_id" => "1",
                        "disabled"    => "N",
                        "f_balance"   => "0.1970871"
                    ],
                    [
                        "rateId"      => "742824",
                        "currency_id" => "68",
                        "disabled"    => "N",
                        "f_balance"   => "6 081.57"
                    ],
                    [
                        "rateId"      => "169824",
                        "currency_id" => "246",
                        "disabled"    => "N",
                        "f_balance"   => "17 720.6057"
                    ],
                    [
                        "rateId"      => "169820",
                        "currency_id" => "226",
                        "disabled"    => "N",
                        "f_balance"   => "4 096.721222"
                    ],
                    [
                        "rateId"      => "742854",
                        "currency_id" => "100",
                        "disabled"    => "N",
                        "f_balance"   => "7 714.37"
                    ],
                    [
                        "rateId"      => "742794",
                        "currency_id" => "67",
                        "disabled"    => "N",
                        "f_balance"   => "6.13842907"
                    ],
                    [
                        "rateId"      => "169811",
                        "currency_id" => "2",
                        "disabled"    => "N",
                        "f_balance"   => "37.9315888"
                    ],
                    [
                        "rateId"      => "169812",
                        "currency_id" => "20",
                        "disabled"    => "N",
                        "f_balance"   => "28.34634561"
                    ],
                    [
                        "rateId"      => "169813",
                        "currency_id" => "22",
                        "disabled"    => "N",
                        "f_balance"   => "405.90322285"
                    ],
                    [
                        "rateId"      => "353627",
                        "currency_id" => "21",
                        "disabled"    => "N",
                        "f_balance"   => "47.08354839"
                    ],
                    [
                        "rateId"      => "169818",
                        "currency_id" => "241",
                        "disabled"    => "N",
                        "f_balance"   => "7.31215797"
                    ],
                    [
                        "rateId"      => "169815",
                        "currency_id" => "74",
                        "disabled"    => "N",
                        "f_balance"   => "3 951.6184756"
                    ],
                    [
                        "rateId"      => "169819",
                        "currency_id" => "213",
                        "disabled"    => "N",
                        "f_balance"   => "32 769.33002656"
                    ],
                    [
                        "rateId"      => "299450",
                        "currency_id" => "281",
                        "disabled"    => "N",
                        "f_balance"   => "1 105.70965492"
                    ],
                    [
                        "rateId"      => "169816",
                        "currency_id" => "76",
                        "disabled"    => "N",
                        "f_balance"   => "10 628.8804671"
                    ],
                    [
                        "rateId"      => "169825",
                        "currency_id" => "248",
                        "disabled"    => "N",
                        "f_balance"   => "17 736.2966"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "229",
                "currency_from_best_code" => "ACRUB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "722796",
                        "currency_id" => "1",
                        "disabled"    => "N",
                        "f_balance"   => "0.1970871"
                    ],
                    [
                        "rateId"      => "742830",
                        "currency_id" => "68",
                        "disabled"    => "N",
                        "f_balance"   => "6 081.57"
                    ],
                    [
                        "rateId"      => "56708",
                        "currency_id" => "246",
                        "disabled"    => "N",
                        "f_balance"   => "17 720.6057"
                    ],
                    [
                        "rateId"      => "215",
                        "currency_id" => "226",
                        "disabled"    => "N",
                        "f_balance"   => "4 096.721222"
                    ],
                    [
                        "rateId"      => "742860",
                        "currency_id" => "100",
                        "disabled"    => "N",
                        "f_balance"   => "7 714.37"
                    ],
                    [
                        "rateId"      => "742800",
                        "currency_id" => "67",
                        "disabled"    => "N",
                        "f_balance"   => "6.13842907"
                    ],
                    [
                        "rateId"      => "181",
                        "currency_id" => "2",
                        "disabled"    => "N",
                        "f_balance"   => "37.9315888"
                    ],
                    [
                        "rateId"      => "182",
                        "currency_id" => "20",
                        "disabled"    => "N",
                        "f_balance"   => "28.34634561"
                    ],
                    [
                        "rateId"      => "183",
                        "currency_id" => "22",
                        "disabled"    => "N",
                        "f_balance"   => "405.90322285"
                    ],
                    [
                        "rateId"      => "353632",
                        "currency_id" => "21",
                        "disabled"    => "N",
                        "f_balance"   => "47.08354839"
                    ],
                    [
                        "rateId"      => "56576",
                        "currency_id" => "241",
                        "disabled"    => "N",
                        "f_balance"   => "7.31215797"
                    ],
                    [
                        "rateId"      => "14972",
                        "currency_id" => "74",
                        "disabled"    => "N",
                        "f_balance"   => "3 951.6184756"
                    ],
                    [
                        "rateId"      => "14207",
                        "currency_id" => "213",
                        "disabled"    => "N",
                        "f_balance"   => "32 769.33002656"
                    ],
                    [
                        "rateId"      => "299448",
                        "currency_id" => "281",
                        "disabled"    => "N",
                        "f_balance"   => "1 105.70965492"
                    ],
                    [
                        "rateId"      => "188",
                        "currency_id" => "76",
                        "disabled"    => "N",
                        "f_balance"   => "10 628.8804671"
                    ],
                    [
                        "rateId"      => "56532",
                        "currency_id" => "248",
                        "disabled"    => "N",
                        "f_balance"   => "17 736.2966"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "238",
                "currency_from_best_code" => "ROSBRUB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "722793",
                        "currency_id" => "1",
                        "disabled"    => "N",
                        "f_balance"   => "0.1970871"
                    ],
                    [
                        "rateId"      => "742827",
                        "currency_id" => "68",
                        "disabled"    => "N",
                        "f_balance"   => "6 081.57"
                    ],
                    [
                        "rateId"      => "56703",
                        "currency_id" => "246",
                        "disabled"    => "N",
                        "f_balance"   => "17 720.6057"
                    ],
                    [
                        "rateId"      => "121",
                        "currency_id" => "226",
                        "disabled"    => "N",
                        "f_balance"   => "4 096.721222"
                    ],
                    [
                        "rateId"      => "742857",
                        "currency_id" => "100",
                        "disabled"    => "N",
                        "f_balance"   => "7 714.37"
                    ],
                    [
                        "rateId"      => "742797",
                        "currency_id" => "67",
                        "disabled"    => "N",
                        "f_balance"   => "6.13842907"
                    ],
                    [
                        "rateId"      => "61",
                        "currency_id" => "2",
                        "disabled"    => "N",
                        "f_balance"   => "37.9315888"
                    ],
                    [
                        "rateId"      => "62",
                        "currency_id" => "20",
                        "disabled"    => "N",
                        "f_balance"   => "28.34634561"
                    ],
                    [
                        "rateId"      => "63",
                        "currency_id" => "22",
                        "disabled"    => "N",
                        "f_balance"   => "405.90322285"
                    ],
                    [
                        "rateId"      => "353630",
                        "currency_id" => "21",
                        "disabled"    => "N",
                        "f_balance"   => "47.08354839"
                    ],
                    [
                        "rateId"      => "56559",
                        "currency_id" => "241",
                        "disabled"    => "N",
                        "f_balance"   => "7.31215797"
                    ],
                    [
                        "rateId"      => "14970",
                        "currency_id" => "74",
                        "disabled"    => "N",
                        "f_balance"   => "3 951.6184756"
                    ],
                    [
                        "rateId"      => "14205",
                        "currency_id" => "213",
                        "disabled"    => "N",
                        "f_balance"   => "32 769.33002656"
                    ],
                    [
                        "rateId"      => "299445",
                        "currency_id" => "281",
                        "disabled"    => "N",
                        "f_balance"   => "1 105.70965492"
                    ],
                    [
                        "rateId"      => "66",
                        "currency_id" => "76",
                        "disabled"    => "N",
                        "f_balance"   => "10 628.8804671"
                    ],
                    [
                        "rateId"      => "56527",
                        "currency_id" => "248",
                        "disabled"    => "N",
                        "f_balance"   => "17 736.2966"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "236",
                "currency_from_best_code" => "POSTBRUB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "722791",
                        "currency_id" => "1",
                        "disabled"    => "N",
                        "f_balance"   => "0.1970871"
                    ],
                    [
                        "rateId"      => "742825",
                        "currency_id" => "68",
                        "disabled"    => "N",
                        "f_balance"   => "6 081.57"
                    ],
                    [
                        "rateId"      => "56701",
                        "currency_id" => "246",
                        "disabled"    => "N",
                        "f_balance"   => "17 720.6057"
                    ],
                    [
                        "rateId"      => "119",
                        "currency_id" => "226",
                        "disabled"    => "N",
                        "f_balance"   => "4 096.721222"
                    ],
                    [
                        "rateId"      => "742855",
                        "currency_id" => "100",
                        "disabled"    => "N",
                        "f_balance"   => "7 714.37"
                    ],
                    [
                        "rateId"      => "742795",
                        "currency_id" => "67",
                        "disabled"    => "N",
                        "f_balance"   => "6.13842907"
                    ],
                    [
                        "rateId"      => "49",
                        "currency_id" => "2",
                        "disabled"    => "N",
                        "f_balance"   => "37.9315888"
                    ],
                    [
                        "rateId"      => "50",
                        "currency_id" => "20",
                        "disabled"    => "N",
                        "f_balance"   => "28.34634561"
                    ],
                    [
                        "rateId"      => "51",
                        "currency_id" => "22",
                        "disabled"    => "N",
                        "f_balance"   => "405.90322285"
                    ],
                    [
                        "rateId"      => "353628",
                        "currency_id" => "21",
                        "disabled"    => "N",
                        "f_balance"   => "47.08354839"
                    ],
                    [
                        "rateId"      => "56557",
                        "currency_id" => "241",
                        "disabled"    => "N",
                        "f_balance"   => "7.31215797"
                    ],
                    [
                        "rateId"      => "14968",
                        "currency_id" => "74",
                        "disabled"    => "N",
                        "f_balance"   => "3 951.6184756"
                    ],
                    [
                        "rateId"      => "14203",
                        "currency_id" => "213",
                        "disabled"    => "N",
                        "f_balance"   => "32 769.33002656"
                    ],
                    [
                        "rateId"      => "299443",
                        "currency_id" => "281",
                        "disabled"    => "N",
                        "f_balance"   => "1 105.70965492"
                    ],
                    [
                        "rateId"      => "54",
                        "currency_id" => "76",
                        "disabled"    => "N",
                        "f_balance"   => "10 628.8804671"
                    ],
                    [
                        "rateId"      => "56525",
                        "currency_id" => "248",
                        "disabled"    => "N",
                        "f_balance"   => "17 736.2966"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "237",
                "currency_from_best_code" => "RSHBRUB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "722792",
                        "currency_id" => "1",
                        "disabled"    => "N",
                        "f_balance"   => "0.1970871"
                    ],
                    [
                        "rateId"      => "742826",
                        "currency_id" => "68",
                        "disabled"    => "N",
                        "f_balance"   => "6 081.57"
                    ],
                    [
                        "rateId"      => "56702",
                        "currency_id" => "246",
                        "disabled"    => "N",
                        "f_balance"   => "17 720.6057"
                    ],
                    [
                        "rateId"      => "120",
                        "currency_id" => "226",
                        "disabled"    => "N",
                        "f_balance"   => "4 096.721222"
                    ],
                    [
                        "rateId"      => "742856",
                        "currency_id" => "100",
                        "disabled"    => "N",
                        "f_balance"   => "7 714.37"
                    ],
                    [
                        "rateId"      => "742796",
                        "currency_id" => "67",
                        "disabled"    => "N",
                        "f_balance"   => "6.13842907"
                    ],
                    [
                        "rateId"      => "55",
                        "currency_id" => "2",
                        "disabled"    => "N",
                        "f_balance"   => "37.9315888"
                    ],
                    [
                        "rateId"      => "56",
                        "currency_id" => "20",
                        "disabled"    => "N",
                        "f_balance"   => "28.34634561"
                    ],
                    [
                        "rateId"      => "57",
                        "currency_id" => "22",
                        "disabled"    => "N",
                        "f_balance"   => "405.90322285"
                    ],
                    [
                        "rateId"      => "353629",
                        "currency_id" => "21",
                        "disabled"    => "N",
                        "f_balance"   => "47.08354839"
                    ],
                    [
                        "rateId"      => "56558",
                        "currency_id" => "241",
                        "disabled"    => "N",
                        "f_balance"   => "7.31215797"
                    ],
                    [
                        "rateId"      => "14969",
                        "currency_id" => "74",
                        "disabled"    => "N",
                        "f_balance"   => "3 951.6184756"
                    ],
                    [
                        "rateId"      => "14204",
                        "currency_id" => "213",
                        "disabled"    => "N",
                        "f_balance"   => "32 769.33002656"
                    ],
                    [
                        "rateId"      => "299444",
                        "currency_id" => "281",
                        "disabled"    => "N",
                        "f_balance"   => "1 105.70965492"
                    ],
                    [
                        "rateId"      => "60",
                        "currency_id" => "76",
                        "disabled"    => "N",
                        "f_balance"   => "10 628.8804671"
                    ],
                    [
                        "rateId"      => "56526",
                        "currency_id" => "248",
                        "disabled"    => "N",
                        "f_balance"   => "17 736.2966"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "231",
                "currency_from_best_code" => "OPNBRUB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "722784",
                        "currency_id" => "1",
                        "disabled"    => "N",
                        "f_balance"   => "0.1970871"
                    ],
                    [
                        "rateId"      => "742818",
                        "currency_id" => "68",
                        "disabled"    => "N",
                        "f_balance"   => "6 081.57"
                    ],
                    [
                        "rateId"      => "56696",
                        "currency_id" => "246",
                        "disabled"    => "N",
                        "f_balance"   => "17 720.6057"
                    ],
                    [
                        "rateId"      => "112",
                        "currency_id" => "226",
                        "disabled"    => "N",
                        "f_balance"   => "4 096.721222"
                    ],
                    [
                        "rateId"      => "742848",
                        "currency_id" => "100",
                        "disabled"    => "N",
                        "f_balance"   => "7 714.37"
                    ],
                    [
                        "rateId"      => "742788",
                        "currency_id" => "67",
                        "disabled"    => "N",
                        "f_balance"   => "6.13842907"
                    ],
                    [
                        "rateId"      => "5",
                        "currency_id" => "2",
                        "disabled"    => "N",
                        "f_balance"   => "37.9315888"
                    ],
                    [
                        "rateId"      => "6",
                        "currency_id" => "20",
                        "disabled"    => "N",
                        "f_balance"   => "28.34634561"
                    ],
                    [
                        "rateId"      => "7",
                        "currency_id" => "22",
                        "disabled"    => "N",
                        "f_balance"   => "405.90322285"
                    ],
                    [
                        "rateId"      => "353621",
                        "currency_id" => "21",
                        "disabled"    => "N",
                        "f_balance"   => "47.08354839"
                    ],
                    [
                        "rateId"      => "56550",
                        "currency_id" => "241",
                        "disabled"    => "N",
                        "f_balance"   => "7.31215797"
                    ],
                    [
                        "rateId"      => "14961",
                        "currency_id" => "74",
                        "disabled"    => "N",
                        "f_balance"   => "3 951.6184756"
                    ],
                    [
                        "rateId"      => "14196",
                        "currency_id" => "213",
                        "disabled"    => "N",
                        "f_balance"   => "32 769.33002656"
                    ],
                    [
                        "rateId"      => "299438",
                        "currency_id" => "281",
                        "disabled"    => "N",
                        "f_balance"   => "1 105.70965492"
                    ],
                    [
                        "rateId"      => "42",
                        "currency_id" => "76",
                        "disabled"    => "N",
                        "f_balance"   => "10 628.8804671"
                    ],
                    [
                        "rateId"      => "56520",
                        "currency_id" => "248",
                        "disabled"    => "N",
                        "f_balance"   => "17 736.2966"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "252",
                "currency_from_best_code" => "PSBRUB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "722789",
                        "currency_id" => "1",
                        "disabled"    => "N",
                        "f_balance"   => "0.1970871"
                    ],
                    [
                        "rateId"      => "742823",
                        "currency_id" => "68",
                        "disabled"    => "N",
                        "f_balance"   => "6 081.57"
                    ],
                    [
                        "rateId"      => "56704",
                        "currency_id" => "246",
                        "disabled"    => "N",
                        "f_balance"   => "17 720.6057"
                    ],
                    [
                        "rateId"      => "117",
                        "currency_id" => "226",
                        "disabled"    => "N",
                        "f_balance"   => "4 096.721222"
                    ],
                    [
                        "rateId"      => "742853",
                        "currency_id" => "100",
                        "disabled"    => "N",
                        "f_balance"   => "7 714.37"
                    ],
                    [
                        "rateId"      => "742793",
                        "currency_id" => "67",
                        "disabled"    => "N",
                        "f_balance"   => "6.13842907"
                    ],
                    [
                        "rateId"      => "25",
                        "currency_id" => "2",
                        "disabled"    => "N",
                        "f_balance"   => "37.9315888"
                    ],
                    [
                        "rateId"      => "26",
                        "currency_id" => "20",
                        "disabled"    => "N",
                        "f_balance"   => "28.34634561"
                    ],
                    [
                        "rateId"      => "27",
                        "currency_id" => "22",
                        "disabled"    => "N",
                        "f_balance"   => "405.90322285"
                    ],
                    [
                        "rateId"      => "353626",
                        "currency_id" => "21",
                        "disabled"    => "N",
                        "f_balance"   => "47.08354839"
                    ],
                    [
                        "rateId"      => "56555",
                        "currency_id" => "241",
                        "disabled"    => "N",
                        "f_balance"   => "7.31215797"
                    ],
                    [
                        "rateId"      => "14966",
                        "currency_id" => "74",
                        "disabled"    => "N",
                        "f_balance"   => "3 951.6184756"
                    ],
                    [
                        "rateId"      => "14201",
                        "currency_id" => "213",
                        "disabled"    => "N",
                        "f_balance"   => "32 769.33002656"
                    ],
                    [
                        "rateId"      => "299449",
                        "currency_id" => "281",
                        "disabled"    => "N",
                        "f_balance"   => "1 105.70965492"
                    ],
                    [
                        "rateId"      => "47",
                        "currency_id" => "76",
                        "disabled"    => "N",
                        "f_balance"   => "10 628.8804671"
                    ],
                    [
                        "rateId"      => "56528",
                        "currency_id" => "248",
                        "disabled"    => "N",
                        "f_balance"   => "17 736.2966"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "232",
                "currency_from_best_code" => "RUSSTRUB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "722785",
                        "currency_id" => "1",
                        "disabled"    => "N",
                        "f_balance"   => "0.1970871"
                    ],
                    [
                        "rateId"      => "742819",
                        "currency_id" => "68",
                        "disabled"    => "N",
                        "f_balance"   => "6 081.57"
                    ],
                    [
                        "rateId"      => "56697",
                        "currency_id" => "246",
                        "disabled"    => "N",
                        "f_balance"   => "17 720.6057"
                    ],
                    [
                        "rateId"      => "113",
                        "currency_id" => "226",
                        "disabled"    => "N",
                        "f_balance"   => "4 096.721222"
                    ],
                    [
                        "rateId"      => "742849",
                        "currency_id" => "100",
                        "disabled"    => "N",
                        "f_balance"   => "7 714.37"
                    ],
                    [
                        "rateId"      => "742789",
                        "currency_id" => "67",
                        "disabled"    => "N",
                        "f_balance"   => "6.13842907"
                    ],
                    [
                        "rateId"      => "9",
                        "currency_id" => "2",
                        "disabled"    => "N",
                        "f_balance"   => "37.9315888"
                    ],
                    [
                        "rateId"      => "10",
                        "currency_id" => "20",
                        "disabled"    => "N",
                        "f_balance"   => "28.34634561"
                    ],
                    [
                        "rateId"      => "11",
                        "currency_id" => "22",
                        "disabled"    => "N",
                        "f_balance"   => "405.90322285"
                    ],
                    [
                        "rateId"      => "353622",
                        "currency_id" => "21",
                        "disabled"    => "N",
                        "f_balance"   => "47.08354839"
                    ],
                    [
                        "rateId"      => "56551",
                        "currency_id" => "241",
                        "disabled"    => "N",
                        "f_balance"   => "7.31215797"
                    ],
                    [
                        "rateId"      => "14962",
                        "currency_id" => "74",
                        "disabled"    => "N",
                        "f_balance"   => "3 951.6184756"
                    ],
                    [
                        "rateId"      => "14197",
                        "currency_id" => "213",
                        "disabled"    => "N",
                        "f_balance"   => "32 769.33002656"
                    ],
                    [
                        "rateId"      => "299439",
                        "currency_id" => "281",
                        "disabled"    => "N",
                        "f_balance"   => "1 105.70965492"
                    ],
                    [
                        "rateId"      => "43",
                        "currency_id" => "76",
                        "disabled"    => "N",
                        "f_balance"   => "10 628.8804671"
                    ],
                    [
                        "rateId"      => "56521",
                        "currency_id" => "248",
                        "disabled"    => "N",
                        "f_balance"   => "17 736.2966"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "235",
                "currency_from_best_code" => "GPBRUB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "722788",
                        "currency_id" => "1",
                        "disabled"    => "N",
                        "f_balance"   => "0.1970871"
                    ],
                    [
                        "rateId"      => "742822",
                        "currency_id" => "68",
                        "disabled"    => "N",
                        "f_balance"   => "6 081.57"
                    ],
                    [
                        "rateId"      => "56700",
                        "currency_id" => "246",
                        "disabled"    => "N",
                        "f_balance"   => "17 720.6057"
                    ],
                    [
                        "rateId"      => "116",
                        "currency_id" => "226",
                        "disabled"    => "N",
                        "f_balance"   => "4 096.721222"
                    ],
                    [
                        "rateId"      => "742852",
                        "currency_id" => "100",
                        "disabled"    => "N",
                        "f_balance"   => "7 714.37"
                    ],
                    [
                        "rateId"      => "742792",
                        "currency_id" => "67",
                        "disabled"    => "N",
                        "f_balance"   => "6.13842907"
                    ],
                    [
                        "rateId"      => "21",
                        "currency_id" => "2",
                        "disabled"    => "N",
                        "f_balance"   => "37.9315888"
                    ],
                    [
                        "rateId"      => "22",
                        "currency_id" => "20",
                        "disabled"    => "N",
                        "f_balance"   => "28.34634561"
                    ],
                    [
                        "rateId"      => "23",
                        "currency_id" => "22",
                        "disabled"    => "N",
                        "f_balance"   => "405.90322285"
                    ],
                    [
                        "rateId"      => "353625",
                        "currency_id" => "21",
                        "disabled"    => "N",
                        "f_balance"   => "47.08354839"
                    ],
                    [
                        "rateId"      => "56554",
                        "currency_id" => "241",
                        "disabled"    => "N",
                        "f_balance"   => "7.31215797"
                    ],
                    [
                        "rateId"      => "14965",
                        "currency_id" => "74",
                        "disabled"    => "N",
                        "f_balance"   => "3 951.6184756"
                    ],
                    [
                        "rateId"      => "14200",
                        "currency_id" => "213",
                        "disabled"    => "N",
                        "f_balance"   => "32 769.33002656"
                    ],
                    [
                        "rateId"      => "299442",
                        "currency_id" => "281",
                        "disabled"    => "N",
                        "f_balance"   => "1 105.70965492"
                    ],
                    [
                        "rateId"      => "46",
                        "currency_id" => "76",
                        "disabled"    => "N",
                        "f_balance"   => "10 628.8804671"
                    ],
                    [
                        "rateId"      => "56524",
                        "currency_id" => "248",
                        "disabled"    => "N",
                        "f_balance"   => "17 736.2966"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "233",
                "currency_from_best_code" => "AVBRUB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "722786",
                        "currency_id" => "1",
                        "disabled"    => "N",
                        "f_balance"   => "0.1970871"
                    ],
                    [
                        "rateId"      => "742820",
                        "currency_id" => "68",
                        "disabled"    => "N",
                        "f_balance"   => "6 081.57"
                    ],
                    [
                        "rateId"      => "56698",
                        "currency_id" => "246",
                        "disabled"    => "N",
                        "f_balance"   => "17 720.6057"
                    ],
                    [
                        "rateId"      => "114",
                        "currency_id" => "226",
                        "disabled"    => "N",
                        "f_balance"   => "4 096.721222"
                    ],
                    [
                        "rateId"      => "742850",
                        "currency_id" => "100",
                        "disabled"    => "N",
                        "f_balance"   => "7 714.37"
                    ],
                    [
                        "rateId"      => "742790",
                        "currency_id" => "67",
                        "disabled"    => "N",
                        "f_balance"   => "6.13842907"
                    ],
                    [
                        "rateId"      => "13",
                        "currency_id" => "2",
                        "disabled"    => "N",
                        "f_balance"   => "37.9315888"
                    ],
                    [
                        "rateId"      => "14",
                        "currency_id" => "20",
                        "disabled"    => "N",
                        "f_balance"   => "28.34634561"
                    ],
                    [
                        "rateId"      => "15",
                        "currency_id" => "22",
                        "disabled"    => "N",
                        "f_balance"   => "405.90322285"
                    ],
                    [
                        "rateId"      => "353623",
                        "currency_id" => "21",
                        "disabled"    => "N",
                        "f_balance"   => "47.08354839"
                    ],
                    [
                        "rateId"      => "56552",
                        "currency_id" => "241",
                        "disabled"    => "N",
                        "f_balance"   => "7.31215797"
                    ],
                    [
                        "rateId"      => "14963",
                        "currency_id" => "74",
                        "disabled"    => "N",
                        "f_balance"   => "3 951.6184756"
                    ],
                    [
                        "rateId"      => "14198",
                        "currency_id" => "213",
                        "disabled"    => "N",
                        "f_balance"   => "32 769.33002656"
                    ],
                    [
                        "rateId"      => "299440",
                        "currency_id" => "281",
                        "disabled"    => "N",
                        "f_balance"   => "1 105.70965492"
                    ],
                    [
                        "rateId"      => "44",
                        "currency_id" => "76",
                        "disabled"    => "N",
                        "f_balance"   => "10 628.8804671"
                    ],
                    [
                        "rateId"      => "56522",
                        "currency_id" => "248",
                        "disabled"    => "N",
                        "f_balance"   => "17 736.2966"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "234",
                "currency_from_best_code" => "RFBRUB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "722787",
                        "currency_id" => "1",
                        "disabled"    => "N",
                        "f_balance"   => "0.1970871"
                    ],
                    [
                        "rateId"      => "742821",
                        "currency_id" => "68",
                        "disabled"    => "N",
                        "f_balance"   => "6 081.57"
                    ],
                    [
                        "rateId"      => "56699",
                        "currency_id" => "246",
                        "disabled"    => "N",
                        "f_balance"   => "17 720.6057"
                    ],
                    [
                        "rateId"      => "115",
                        "currency_id" => "226",
                        "disabled"    => "N",
                        "f_balance"   => "4 096.721222"
                    ],
                    [
                        "rateId"      => "742851",
                        "currency_id" => "100",
                        "disabled"    => "N",
                        "f_balance"   => "7 714.37"
                    ],
                    [
                        "rateId"      => "742791",
                        "currency_id" => "67",
                        "disabled"    => "N",
                        "f_balance"   => "6.13842907"
                    ],
                    [
                        "rateId"      => "17",
                        "currency_id" => "2",
                        "disabled"    => "N",
                        "f_balance"   => "37.9315888"
                    ],
                    [
                        "rateId"      => "18",
                        "currency_id" => "20",
                        "disabled"    => "N",
                        "f_balance"   => "28.34634561"
                    ],
                    [
                        "rateId"      => "19",
                        "currency_id" => "22",
                        "disabled"    => "N",
                        "f_balance"   => "405.90322285"
                    ],
                    [
                        "rateId"      => "353624",
                        "currency_id" => "21",
                        "disabled"    => "N",
                        "f_balance"   => "47.08354839"
                    ],
                    [
                        "rateId"      => "56553",
                        "currency_id" => "241",
                        "disabled"    => "N",
                        "f_balance"   => "7.31215797"
                    ],
                    [
                        "rateId"      => "14964",
                        "currency_id" => "74",
                        "disabled"    => "N",
                        "f_balance"   => "3 951.6184756"
                    ],
                    [
                        "rateId"      => "14199",
                        "currency_id" => "213",
                        "disabled"    => "N",
                        "f_balance"   => "32 769.33002656"
                    ],
                    [
                        "rateId"      => "299441",
                        "currency_id" => "281",
                        "disabled"    => "N",
                        "f_balance"   => "1 105.70965492"
                    ],
                    [
                        "rateId"      => "45",
                        "currency_id" => "76",
                        "disabled"    => "N",
                        "f_balance"   => "10 628.8804671"
                    ],
                    [
                        "rateId"      => "56523",
                        "currency_id" => "248",
                        "disabled"    => "N",
                        "f_balance"   => "17 736.2966"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "230",
                "currency_from_best_code" => "RNKBRUB",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "722783",
                        "currency_id" => "1",
                        "disabled"    => "N",
                        "f_balance"   => "0.1970871"
                    ],
                    [
                        "rateId"      => "742817",
                        "currency_id" => "68",
                        "disabled"    => "N",
                        "f_balance"   => "6 081.57"
                    ],
                    [
                        "rateId"      => "56695",
                        "currency_id" => "246",
                        "disabled"    => "N",
                        "f_balance"   => "17 720.6057"
                    ],
                    [
                        "rateId"      => "111",
                        "currency_id" => "226",
                        "disabled"    => "N",
                        "f_balance"   => "4 096.721222"
                    ],
                    [
                        "rateId"      => "742847",
                        "currency_id" => "100",
                        "disabled"    => "N",
                        "f_balance"   => "7 714.37"
                    ],
                    [
                        "rateId"      => "742787",
                        "currency_id" => "67",
                        "disabled"    => "N",
                        "f_balance"   => "6.13842907"
                    ],
                    [
                        "rateId"      => "1",
                        "currency_id" => "2",
                        "disabled"    => "N",
                        "f_balance"   => "37.9315888"
                    ],
                    [
                        "rateId"      => "2",
                        "currency_id" => "20",
                        "disabled"    => "N",
                        "f_balance"   => "28.34634561"
                    ],
                    [
                        "rateId"      => "3",
                        "currency_id" => "22",
                        "disabled"    => "N",
                        "f_balance"   => "405.90322285"
                    ],
                    [
                        "rateId"      => "353620",
                        "currency_id" => "21",
                        "disabled"    => "N",
                        "f_balance"   => "47.08354839"
                    ],
                    [
                        "rateId"      => "56549",
                        "currency_id" => "241",
                        "disabled"    => "N",
                        "f_balance"   => "7.31215797"
                    ],
                    [
                        "rateId"      => "14960",
                        "currency_id" => "74",
                        "disabled"    => "N",
                        "f_balance"   => "3 951.6184756"
                    ],
                    [
                        "rateId"      => "14195",
                        "currency_id" => "213",
                        "disabled"    => "N",
                        "f_balance"   => "32 769.33002656"
                    ],
                    [
                        "rateId"      => "299437",
                        "currency_id" => "281",
                        "disabled"    => "N",
                        "f_balance"   => "1 105.70965492"
                    ],
                    [
                        "rateId"      => "41",
                        "currency_id" => "76",
                        "disabled"    => "N",
                        "f_balance"   => "10 628.8804671"
                    ],
                    [
                        "rateId"      => "56519",
                        "currency_id" => "248",
                        "disabled"    => "N",
                        "f_balance"   => "17 736.2966"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "270",
                "currency_from_best_code" => "HLKBKZT",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1469199",
                        "currency_id" => "264",
                        "disabled"    => "Y",
                        "f_balance"   => "9 514.0732"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "271",
                "currency_from_best_code" => "JSNBKZT",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "689421",
                        "currency_id" => "264",
                        "disabled"    => "Y",
                        "f_balance"   => "9 514.0732"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "272",
                "currency_from_best_code" => "FFBKZT",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "689422",
                        "currency_id" => "264",
                        "disabled"    => "Y",
                        "f_balance"   => "9 514.0732"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "273",
                "currency_from_best_code" => "FRTBKZT",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "689410",
                        "currency_id" => "264",
                        "disabled"    => "Y",
                        "f_balance"   => "9 514.0732"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "274",
                "currency_from_best_code" => "CCBKZT",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "689411",
                        "currency_id" => "264",
                        "disabled"    => "Y",
                        "f_balance"   => "9 514.0732"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "275",
                "currency_from_best_code" => "BRBKZT",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "689412",
                        "currency_id" => "264",
                        "disabled"    => "Y",
                        "f_balance"   => "9 514.0732"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "276",
                "currency_from_best_code" => "ERSNBKZT",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "689413",
                        "currency_id" => "264",
                        "disabled"    => "Y",
                        "f_balance"   => "9 514.0732"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "261",
                "currency_from_best_code" => "CARDKZT",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1496562",
                        "currency_id" => "264",
                        "disabled"    => "Y",
                        "f_balance"   => "9 514.0732"
                    ]
                ]
            ],
            [
                "currency_from_id"        => "269",
                "currency_from_best_code" => "KSPBKZT",
                "group_id"                => "210",
                "list"                    => [
                    [
                        "rateId"      => "1469202",
                        "currency_id" => "264",
                        "disabled"    => "Y",
                        "f_balance"   => "9 514.0732"
                    ]
                ]
            ]
        ]
    ]
];

echo json_encode($array);
