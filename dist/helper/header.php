<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"/>
    <?php
		$path = pathinfo($_SERVER["REQUEST_URI"]);
		$key = $path["filename"];
		$keys = array (
			"nord"      => "Cucina Nord Ibaraki",
			"ined"      => "INÉD",
			"ayano"     => "Ayano Mashiro",
			"fos"       => "Flandre Online Store",
			"transwork" => "TRANSWORK",
			"lanvin"    => "LANVIN en bleu",
			"maquia"    => "MAQUIA ONLINE"
			);
		$myName = "Kyoko Baba";
			if ($key == null) {
					echo "<title>" . $myName . " — " . "Portfolio" . "</title>";
			} else {
				// $title = $keys[$key];
				// echo "<title>" . $key . " — " . $myName . "</title>";
			}
	?>
<!-- css -->
	<link rel="stylesheet" type="text/css" href="./css/style.css"/>
<!-- favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico"/>
	<link rel="apple-touch-icon" sizes="256x256" href="/images/favicon.ico"/>
</head>
<!-- content -->
<body>
	<?php $url = $_SERVER["REQUEST_URI"];
	if ( $url == "/" ): ?>
		<header class="header">
			<ul class="header__wrap">
					<li class="kyoko">
						KYOKO BABA
					</li>
			</ul>
		</header>
	<?php else: ?>
		<header class="header--link">
			<a href="/#list">
				<span class="arrow"><?php include (__DIR__ . "./arrow.html"); ?></span>
				Home</a>
		</header>
	<?php endif; ?>