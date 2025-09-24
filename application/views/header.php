<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $page_title; ?></title>
  <meta name="keywords" content="<?php echo $meta_keyword; ?>" />
  <meta name="description" content="<?php echo $meta_description; ?>" />
  <link rel="canonical" href="<?php echo base_url(uri_string()); ?>"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="icon" href="<?php echo UPLOADFILE.webdata()->icon; ?>" type="image/x-icon">
  <!-- css here -->
  <link rel="stylesheet" href="<?php echo HTTP_ASSET_PATH; ?>css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo HTTP_ASSET_PATH; ?>css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo HTTP_ASSET_PATH; ?>css/style.css?v=1.93">
  <link rel="stylesheet" href="<?php echo HTTP_ASSET_PATH; ?>css/responsive.css">
  <link rel="stylesheet" href="<?php echo HTTP_ASSET_PATH; ?>css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo HTTP_ASSET_PATH; ?>css/bootsnav.css">
  <link rel="stylesheet" href="<?php echo HTTP_ASSET_PATH; ?>css/owl.carousal.css">
  <link rel="stylesheet" href="<?php echo HTTP_ASSET_PATH; ?>css/owl.theme.default.css">
  <link rel="stylesheet" href="<?php echo HTTP_ASSET_PATH; ?>css/sm-clean.css?v=0.1">
  <link rel="stylesheet" href="<?php echo HTTP_ASSET_PATH; ?>css/sm-core-css.css">
  <link rel="stylesheet" href="<?php echo HTTP_ASSET_PATH; ?>css/slick.css?v=0.1">
  <link rel="stylesheet" href="<?php echo HTTP_ASSET_PATH; ?>fonts/flaticon.css">
    <?php
    $currentURL = current_url();
    $params = $_SERVER['QUERY_STRING']; 
    // Check if the 'source' parameter exists
    if (isset($_GET['source']) && $_GET['source'] == 'anmol') { ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XK13MS7ZFD"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-XK13MS7ZFD');
    </script>
    <?php } else { ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XSVL0HG6G8"></script>
    <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'G-XSVL0HG6G8');
    </script>
    <?php }
    ?>
    <style>
        header.shrink img {
            width: 20% !important;
            margin: 0px 0px 0px 0px !important;
        }
        .nav-brand a {
            padding: 5px 12px 5px 0px !important;
        }
    </style>
</head>
<body>
  <!-- header -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="main-nav" role="navigation">
            <!-- Mobile menu toggle button (hamburger/x icon) -->
            <input id="main-menu-state" type="checkbox">
            <label class="main-menu-btn" for="main-menu-state"> <span class="main-menu-btn-icon"></span> Toggle main
              menu visibility </label>
            <h2 class="nav-brand"><a href="<?php echo base_url('/'); ?>"><img style="border-radius: 10px; padding: 0px; margin: -15px 0px 0px 0px; width: 25.5%;" src="<?php echo UPLOADFILE.webdata()->logo; ?>" alt="Gymfit" class="img-fluid"></a></h2>
            <!-- Sample menu definition -->
            <ul id="main-menu" class="sm sm-clean" data-smartmenus-id="1559366433783545">
              <!--<li><a href="<?php // echo base_url('/'); ?>">Home</a></li>-->
              <li><a href="<?php echo base_url('appointment'); ?>">Corporate</a></li>
              <li><a href="<?php echo base_url('eap'); ?>">EAP</a>
              </li>
              <li><a href="<?php echo base_url('severe_diseases'); ?>">Severe Diseases Care</a>
              </li>
              <li><a href="#" style="text-transform: capitalize; background-color: cadetblue; border-radius: 5px ! IMPORTANT; padding: 15px 20px 16px 20px;">YogASMR</a>
                <ul>
                  <li><a href="<?php echo base_url('mentalhealth'); ?>">Mental Health</a></li>
                  <li><a href="<?php echo base_url('fitness_transformation'); ?>" style="text-transform: capitalize;">YogASMR</a></li>
                  <li><a href="<?php echo base_url('healthissues'); ?>">Health Issues</a></li>
                </ul>
              </li>
              <!--<li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>-->
              <li><a href="<?php echo base_url('video'); ?>">Individual Sessions </a></li>
              <!--<li><a href="<?php // echo base_url('contactus'); ?>">Contact</a></li>              -->
              <li class="last_menu"><a href="tel:<?php echo webdata()->phone; ?>"><?php echo webdata()->phone; ?></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->