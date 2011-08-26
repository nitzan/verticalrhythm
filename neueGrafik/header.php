<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/column.js"></script>

<?php wp_head(); ?>
</head>
<body>
	<div id="container">
		<div id="titleBlock">
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a></h1>
			<h3><?php bloginfo('description'); ?></h3>
			<ul id="recent" style="display:none;">
				<?php wp_get_archives('title_li=&type=postbypost&limit=5'); ?>
			</ul>
		</div>
		<div id="navigationBlock">
			<div class="filler">&nbsp;</div>
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
			<ul>
				<?php wp_list_categories('title_li='); ?>
			</ul>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
			<div class="clear"></div>
		</div>
		<div id="loading"></div>
		<div id="content" style="opacity:0;">