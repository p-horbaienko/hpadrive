<?php
require_once $_SERVER['DOCUMENT_ROOT']."/routes/routes.php";
require_once ( $_SERVER['DOCUMENT_ROOT']."/helper.php");
?>

<!DOCTYPE html>
<html lang="uk" xmlns:og="https://ogp.me/ns#">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $page_title; ?></title>

  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="<?php echo $page_keywords; ?>">

  <meta property="og:site_name" content="HPA-DRIVE, Перевезення вантажів" />
  <meta property="og:title" content="<?php echo $page_title; ?>" />
  <meta property="og:description" content="<?php echo $page_description; ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="<?php echo $url; ?>"/>
  <meta property="og:image" content="../public/img/ukraine_doroga_dostavka_kyiv.jpg" />
  <meta property="og:image:secure_url" content="../public/img/ukraine_doroga_dostavka_kyiv.jpg" />

  <link rel="shortcut icon" href="../public/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="../public/img/favicon.ico" type="image/x-icon">

  <!-- Styles -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

  <link href="../public/css/style.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
  <header>
    <div class="container h-container">
      <div>
        <svg id='flag-svg'>
          <polygon points="0,0 55,0 0,55" style="fill:#265EAB;" />
          <polygon points="60,0 100,0 0,100 0,60" style="fill:#FDD404;" />
        </svg>
        <a href="/" class="logo">
          <i class="fas fa-truck"></i><?php echo $company_name;?>
        </a>
      </div>

      <?php include(ROOT_PATH.'layouts/navbar.php') ?>

    </div>
  </header>
