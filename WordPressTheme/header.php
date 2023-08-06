<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>wp theme c-theme-001</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer="" src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  <?php
  // wp_head();
  ?>
</head>


<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <h1><a href="index.html">ヘッダー（動的サイト検証）</a></h1>
    <button class="js-header-menu">
      <span></span>
    </button>
  </header>