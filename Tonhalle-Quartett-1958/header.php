<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<script type="text/javascript">
	
	$.fn.pause = function(duration) {
	    $(this).animate({ dummy: 1 }, duration);
	    return this;
	};
	
	</script>
<div class="blue1"></div>
<div class="red1"></div>
<div class="blue2"></div>
<div class="red2"></div>
<div class="blue3"></div>
<div class="red3"></div>
<div class="blue4"></div>
<div class="red4"></div>
