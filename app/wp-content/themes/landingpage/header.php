<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
	<title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />
    <meta charset="utf-8">

</head>
<body <?php body_class() ?>>
<header class="site-header">
    <div class="container">
        <h1>Header</h1>
    </div>
</header>