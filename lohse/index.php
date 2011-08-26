<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!--for stats-->

	<link rel="stylesheet" href="/wp-content/themes/lohse/css/grid.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/wp-content/themes/lohse/css/page.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/wp-content/themes/lohse/css/anythingslider.css" type="text/css" media="screen" />
    
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="/wp-content/themes/lohse/js/jquery.easing.1.2.js"></script>
	<script type="text/javascript" src="/wp-content/themes/lohse/js/swfobject.js"></script>
	<script type="text/javascript" src="/wp-content/themes/lohse/js/jquery.anythingslider.js" charset="utf-8"></script>
    <script type="text/javascript" src="/wp-content/themes/lohse/js/toggle.js"></script>
	<script type="text/javascript" src="/wp-content/themes/lohse/js/jquery.anythingslider.edit.js"></script>
    
    <script type="application/javascript">  
      function draw() {  
        var canvas = document.getElementById("canvas");  
        if (canvas.getContext) {  
        var ctx = canvas.getContext("2d");  
   
        ctx.fillStyle = "rgba(255,204,0,0.5)";  
        ctx.fillRect (613, 0, 216, 515);  
   
        }  
      }  
    </script>  

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
    
</head>

<body onload="draw();">

<div class="region-ultra-top">
  <div class="c10">
  	<div class="g10">
    <div class="gleft">
      <h2><a href="/">Home</a></h2>
    </div>
    <ul>
      <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
      <?php endif; ?>
	</ul>
    </div>
  </div>
</div>
<div class="clear"></div>
<div style="margin-top: 30px;" class="c10">
<ul id="slider2">

  <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

  <li class="panel1">
  <div class="post">
    <div class="header">
      <div class="g2 pre2"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
      <div class="g2"><p><?php the_time('m.j.y') ?></p></div>
      <div class="g2"><p><?php the_author(); ?></p></div>
      <div class="g2"><p><a class="full_post" href="<?php the_permalink(); ?>">Full Post</a></p></div>
    </div><!--/header-->
    
    <div class="clearfix"></div>
    
    <div class="g10">
      <a href="#" class="extra_info"><p class="line">Extra Information</p></a>
    </div><!--/g10--> 
    <div class="g6 pre2">
      <div class="entry">
        <?php the_content(); ?>
      </div>
    </div>
    
    <div class="clearfix"></div>
    
    <div class="g10">
    <?php
	if ( has_post_thumbnail() ) {
		// the current post has a thumbnail
	} else {
		// the current post lacks a thumbnail
	}
	?>
    <?php the_post_thumbnail(); ?>
    </div>
     
    <div class="g2 pre2"><?php the_meta(); ?></div>
    <div class="g2 pre2"><a class="blackbox" href="/"><p class="blackbox">Home sweet home</p></a></div>
  </div><!--/post-->
  </li>

  <?php endwhile; ?>
  <?php endif; ?>
</ul>

<canvas id="canvas" width="1000" height="515"></canvas>
</div>

</body>

</html>
