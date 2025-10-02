<?php 

header('Content-Type: application/json');
$arr = [
	"status" => 200,
	"data"   => [
		"socials" => [
			[
				"code"         => "telegram",
				"link"         => "",
				"contactImage" => "tel_contacts"
			],
			[
				"code"         => "vk",
				"link"         => " ",
				"contactImage" => "vk_contacts"
			],
			[
				"code"         => "twitter",
				"link"         => " ",
				"contactImage" => "tw_contacts"
			],
			[
				"code"         => "youtube",
				"link"         => " ",
				"contactImage" => "y_contacts"
			]
		]
	]
];
echo json_encode($arr);
?>
