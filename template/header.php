<!DOCTYPE html>
<html lang="">
<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CJCVGND11N"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-CJCVGND11N');
  </script>
  <title><?php if($title != '') echo $title . ' - ' ; ?> PamPi Mobiliario - Alquiler para eventos Lima Perú</title>
  <link rel="apple-touch-icon" sizes="57x57" href="../webicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../webicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../webicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../webicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../webicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../webicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../webicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../webicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../webicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../webicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../webicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../webicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../webicon/favicon-16x16.png">
  <link rel="manifest" href="../webicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../webicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <meta name="description" content="<?php echo $metadescription; ?>">

  <meta property="og:title" content="<?php if($title != '') echo $title . ' - ' ; ?>PamPi Mobiliario" />
  <meta property="og:description" content="<?php echo $metadescription; ?>" />
  <meta property="og:image" content="<?php echo $og_image_url; ?>" />
  <meta property="og:url" content="<?php echo $og_url; ?>"/>
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="es_ES" />
  <meta property="og:site_name" content="PamPi Mobiliario" />



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="../layout/styles/layout.css?p=2" rel="stylesheet" type="text/css" media="all">
  <link href="../layout/styles/mobile.css?p=1" rel="stylesheet" media="screen and (max-width: 759px)" />
  <link href="../layout/styles/desktop.css?p=1" rel="stylesheet" media="screen and (min-width: 760px)" />
  <link href="../layout/styles/menu.css?p=1" rel="stylesheet">
  <link href="../layout/styles/slider.css?p=1" rel="stylesheet" type="text/css" media="all">
  <script src="../layout/scripts/slider.js"></script>
  <script src="../layout/scripts/whatsapp.js"></script>
</head>

<body id="top">
  <section class="top-nav">
    <div>
      <!-- no borrar este div -->
    </div>
    <input id="menu-toggle" type="checkbox" />
    <label class='menu-button-container' for="menu-toggle">
      <div class='menu-button'></div>
    </label>
    <ul class="menu">
      <li <?php if($active_menu == 'inicio') echo 'class="active"' ?>><a href="/">INICIO</a></li>
      <li <?php if($active_menu == 'barras') echo 'class="active"' ?> ><a href="/barras/">BARRAS Y MESAS</a></li>
      <li <?php if($active_menu == 'estructuras') echo 'class="active"' ?>><a href="/estructuras/">BACKDROPS & REPISAS</a></li>
      <li <?php if($active_menu == 'salas-lounge') echo 'class="active"' ?>><a href="/salas-lounge/">SALAS LOUNGE</a></li>
      <li <?php if($active_menu == 'mesas-sillas-altas') echo 'class="active"' ?>><a href="/mesas-sillas-altas/">SILLAS ALTAS</a></li>
      
      
      <li <?php if($active_menu == 'whatsapp-link') echo 'class="active"' ?>><a name="whatsapp-link" target="_blank" href="#">CONTACTO</a></li>
    </ul>
  </section>

  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <!-- <h1> -->
        <a href="/">
          <img style="height:248px" src="../images/logo-pampi-mobiliario-2.webp" alt="logo PamPi">
        </a>
      <!-- </h1> -->
    </header>
  </div>