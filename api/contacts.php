<?php

header('Content-Type: application/json');
$arr = [
	"status" => 200,
	"data"   => [
		"contacts" => [
			[
				"title"       => "По вопросам сотрудничества",
				"contact"     => "partners@AsteriChain",
				"description" => "",
				"link"        => "mailto:partners@AsteriChain",
				"icon"        => "email"
			],
			[
				"title"       => "Служба поддержки AsteriChain",
				"contact"     => "mail@AsteriChain",
				"description" => "",
				"link"        => "mailto:mail@AsteriChain",
				"icon"        => "email"
			],
			[
				"title"       => "Служба поддержки AsteriChain в Telegram",
				"contact"     => "напишите нам",
				"description" => "<p>Внимание! Переходите в телеграм канал по ссылкам только с нашего сайта, остерегайтесь фейков и мошенников.</p>",
				"link"        => "https://t.me/AsteriChain_ex",
				"icon"        => "teleg2"
			]
		]
	]
];
echo json_encode($arr);
?>