<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	
	<!-- Editable Meta Tags -->
	<meta name="description" content="Matthew Doig's site"/>
	<meta name="keywords" content="matthew doig,.net, c#, f#, javascript, css, asp.net mvc"/>
	<meta name="author" content="Matthew Doig"/>
	<meta name="copyright" content="Matthew Doig" />
	<meta name="robots" content="index,follow" />
	<!-- Meta Tags End-->
	
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/content/prettify/prettify.css"></link>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="blogcontainer">
<div class="header left">
	<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
	<h2><?php bloginfo('description'); ?></h2>
</div>
<div class="blogger right">
    <a href="<?php bloginfo('url'); ?>/about-me">
        <div class="bloggername">
            <h1>Matthew</h1>
            <h2>Doig</h2>
        </div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/content/headshot-48.jpg" />
    </a>
</div>
<div class="main clear">
<!-- end header -->
