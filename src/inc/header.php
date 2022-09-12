<!DOCTYPE html>
<meta http-equiv="Content-Language" content="ja">
<meta name="google" content="notranslate">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"/>
   <?php
      $dist = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"];

      $path = pathinfo($_SERVER["REQUEST_URI"]);
      $key = $path["filename"];
      $keys = array (
         "facymedia" => "FACY MEDIA",
         "facyapp"   => "FACY APP",
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
               echo "<title>" . $myName . " — Portfolio" . "</title>";
         } else {
            $title = $keys[$key];
            echo '<title>' . $title . ' — ' . $myName . '</title>';
         }
      ?>
<!-- css -->
	<link rel="stylesheet" type="text/css" href="<?php echo ($dist . "/css/style.css"); ?>"/>
<!-- favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo ($dist . "/asset/favicon.ico"); ?>"/>
	<link rel="apple-touch-icon" sizes="256x256" href="<?php echo ($dist . "/asset/apple-touch-icon.png"); ?>"/>
</head>
<!-- content -->
<body>
   <header class="header">
      <ul class="header__wrap">
      <?php $url = $_SERVER["REQUEST_URI"];
      if ( $url == "/" ): ?>
         <li class="kyoko">
            Kyoko Baba
         </li>
      <?php else: ?>
         <li class="header--link">
            <a href="/#list">
               <span class="arrow"><?php include (__DIR__ . "/../inc/arrow.html")?></span>
               Home</a>
         </li>
      <?php endif; ?>
      </ul>
   </header>
