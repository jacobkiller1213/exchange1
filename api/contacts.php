<?php

header('Content-Type: application/json');
$arr = [
	"status" => 200,
	"data"   => [
		"contacts" => [
			[
				"title"       => "По вопросам сотрудничества",
				"contact"     => "partners@BixBite",
				"description" => "",
				"link"        => "mailto:partners@BixBite",
				"icon"        => "email"
			],
			[
				"title"       => "Служба поддержки BixBite",
				"contact"     => "mail@BixBite",
				"description" => "",
				"link"        => "mailto:mail@BixBite",
				"icon"        => "email"
			],
			[
				"title"       => "Служба поддержки BixBite в Telegram",
				"contact"     => "напишите нам",
				"description" => "<p>Внимание! Переходите в телеграм канал по ссылкам только с нашего сайта, остерегайтесь фейков и мошенников.</p>",
				"link"        => "https://t.me/BixBite_com",
				"icon"        => "teleg2"
			]
		]
	]
];
echo json_encode($arr);
?>