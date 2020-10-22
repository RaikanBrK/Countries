<?php
	$menu = [
		[
			"diretorio" => "index",
			"text" => "Search for Countries"
		],
		[
			"diretorio" => "countries",
			"text" => "Countries"
		],
		[
			"diretorio" => "student",
			"text" => "Student"
		]
	];

	function activeLink($path) {
		$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
		$path = trim($path);
		return $path == $url ? 'active' : '';
	}
?>