<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="revisit-after" content="7 days">
	<script src="https://use.typekit.net/cjr8djc.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
    <?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
</head>

<body class="<?php sandbox_body_class() ?>">

<div id="wrapper" class="wrapper hfeed">

	<header id="header">
	    <img src="/wp-content/themes/clarity/images/alex-desk.svg" width="200" alt="Alex at his desk in front of a laptop" />
		<h1 id="blog-title"><span><a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home"><?php bloginfo('name') ?></a></span></h1>
		<div id="blog-description" class="blog-subtitle"><?php bloginfo('description') ?></div>
	</header>

	<nav id="access" class="navigation" role="navigation">
		<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'sandbox' ) ?>"><?php _e( 'Skip to content', 'sandbox' ) ?></a></div>
		<ul>
		    <li><a href="/">Home</a></li>
		    <?php wp_list_categories('title_li=&show_count=0&hierarchical=1') ?>
		</ul>
	</nav><!-- #access -->
