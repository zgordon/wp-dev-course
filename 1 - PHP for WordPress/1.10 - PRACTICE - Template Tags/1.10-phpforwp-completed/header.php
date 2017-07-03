<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="/wp-content/themes/1.10-phpforwp-completed/style.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header id="masthead">
    <h1><a href="#"><?php bloginfo( 'name' ); ?></a></h1>
  </header>
