<!doctype html>
<!-- hhogehogeoge -->
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <title><?php if(is_single()){ ?><?php wp_title('', true, 'right'); ?>- <?php } ?><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
  <meta name="description" content="Ubuntu, php, mysql, javascript, vim とかの勉強を頑張るブログ">
  <meta name="keyword" content=""><!-- php で何かしら書く -->
  <meta name="google-site-verification" content="ZMmYuTaNNCuAy2ndRd2Pf3MdbL7zxLxxhxrKwhDZ5pE" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url(); ?>/images/favicon.ico">
  <link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php echo site_url(); ?>/feed">
  <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" media="screen">
  <link href="<?php echo site_url(); ?>/css/normalize.css" rel="stylesheet" media="screen">
  <link href="<?php echo site_url(); ?>/css/main.css" rel="stylesheet" media="screen">
  <link href="<?php echo site_url(); ?>/css/prettify.css" rel="stylesheet" media="screen">
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=169516059743947&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <header id="header" class="wrapper">
    <h1><a href="<?php echo site_url(); ?>">YASAINET</a></h1>
  </header>
  <div id="content" class="wrapper">
  <!-- /header.php -->
