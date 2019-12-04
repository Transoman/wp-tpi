<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="format-detection" content="telephone=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
  <header class="header">

    <a href="<?php echo home_url( '/' ); ?>" class="logo header__logo">
      <img src="<?php echo THEME_URL; ?>/images/general/logo.svg" width="345" alt="<?php echo bloginfo( 'name' ); ?>">
    </a>

    <button type="button" class="nav-toggle">
      <span class="nav-toggle__line"></span>
    </button>

  </header><!-- /.header-->

  <div class="content">