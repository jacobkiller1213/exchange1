<?php

header('Content-Type: application/json');
$arr = [
	"status" => 200,
	"data"   => [
		"contacts" => [
			[
				"title"       => "По вопросам сотрудничества",
				"contact"     => "partners@CoinFiber",
				"description" => "",
				"link"        => "mailto:partners@CoinFiber",
				"icon"        => "email"
			],
			[
				"title"       => "Служба поддержки CoinFiber",
				"contact"     => "mail@CoinFiber",
				"description" => "",
				"link"        => "mailto:mail@CoinFiber",
				"icon"        => "email"
			],
			[
				"title"       => "Служба поддержки CoinFiber в Telegram",
				"contact"     => "напишите нам",
				"description" => "<p>Внимание! Переходите в телеграм канал по ссылкам только с нашего сайта, остерегайтесь фейков и мошенников.</p>",
				"link"        => "https://t.me/coinfiber_com",
				"icon"        => "teleg2"
			]
		]
	]
];
echo json_encode($arr);
?>