<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	
	<title><?php bloginfo('name'); { ?> | <?php } wp_title(' '); if(wp_title(' ', false)) ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!--for stats-->

	<link rel="stylesheet" href="/wp-content/themes/lohse/css/grid.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/wp-content/themes/lohse/css/page.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript">
	<!--//--><![CDATA[//><!--

    $(document).ready(function() { 
	    $(".extra_info").toggle(function(){
	    	$(".region-ultra-top").animate({marginTop:0},"slow", function () {
	    		$("#edit-name").focus();
	    	});
		},function(){
    		$(".region-ultra-top").animate({marginTop:-200},"slow");        
		});
	    $(".exit_toggle").toggle(function(){
	    	$(".region-ultra-top").animate({marginTop:-200},"slow", function () {
	    		$("#edit-name").focus();
	    	});
		},function(){
    		$(".region-ultra-top").animate({marginTop:-200},"slow");        
		});
	});
	
	//--><!]]>
	</script>

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>

</head>

<body>
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
<div class="c10_2">

  <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>  
  <div class="post">
    <div class="header">
      <div class="g2 pre4"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
    </div><!--/header-->
    
    <div class="clearfix"></div>
    
    <div class="g10">
      <a href="#" class="extra_info"><p class="line">Extra Information</p></a>
    </div><!--/g10-->
    
    <div class="g10 single">
      <h3 class="subhead"><?php if (function_exists('the_subheading')) { the_subheading('<p>', '</p>'); } ?></h3>
      <div class="g3"><?php the_excerpt(); ?></div>
      <div class="g2 meta"><p><?php the_time('m.j.y') ?><br /><?php the_author(); ?></p></div>
    </div>
    
    <div class="clearfix"></div>

<!--    <div class="g2 pre2"><?php the_meta(); ?></div>-->
    <div class="g2 pre6"><a class="blackbox" href="/"><p class="blackbox">Home sweet home</p></a></div>
    <div class="g2"><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>
  <?php endwhile; ?>
  <?php endif; ?>
  
</div><!--/c10-->
</body>

</html>
