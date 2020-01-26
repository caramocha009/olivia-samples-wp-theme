<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo get_bloginfo('name'); ?></title>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC|Amiri|Spectral&display=swap"
          rel="stylesheet"/>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>
<div class="page">

    <?php wp_nav_menu('&container_class=collapsed top-nav&container=nav&show_home=1&depth=1&menu=header-menu'); ?>
<!--    --><?php //wp_nav_menu('&container_class=collapsed menu-doula-services-container &menu=doula-services'); ?>
    <div class="content">