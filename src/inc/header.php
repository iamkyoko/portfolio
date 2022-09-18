<!DOCTYPE html>
<meta http-equiv="Content-Language" content="ja">
<meta name="robots" content="noindex"/>
<meta name="google" content="notranslate">
<head prefix="og: https://ogp.me/ns#">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"/>
<!-- og -->
   <meta property="og:site_name" content="Kyoko Baba"/>
   <meta property="og:description" content="Kyoko Baba ― Web and UX/UI Designer." />
   <meta property="og:image" content="<?php echo ($dist . "/asset/ogp.png"); ?>"/>
<!-- title -->
   <?php
      $dist = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"];

      $path = pathinfo($_SERVER["REQUEST_URI"]);
      $key = $path["filename"];
      $keys = array (
         "facyapp"   => "FACY APP",
         "facyadmin" => "FACY SHOP ADMIN",
         "facymedia" => "FACY MEDIA",
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
	<link rel="apple-touch-icon" href="<?php echo ($dist . "/asset/apple-touch-icon.png"); ?>" sizes="256x256"/>
   <link rel="icon" type="image/png"  href="<?php echo ($dist . "/asset/android-chrome-512x512.png"); ?>" sizes="512x512"/>
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
               Back</a>
         </li>
      <?php endif; ?>
      </ul>
   </header>
