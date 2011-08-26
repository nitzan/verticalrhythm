<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
	<div id="content" class="narrowcolumn" role="main">
    	<?php
  		$temp = $wp_query;
  		$wp_query= null;
  		$wp_query = new WP_Query();
  		$wp_query->query('showposts=1'.'&paged='.$paged);
  		?>
  		<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div id="titleholder"><h2><?php the_title(); ?></h2></div>
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				  <p><?php the_time('F jS, Y') ?></p>
    			<p class="postmetadata">
    			<?php edit_post_link('Edit', '', ' | '); ?></p>
  		  </div>
	    </div>
		<?php endwhile; ?>
		<div id="navigation">
			<div class="alignleft"><?php next_posts_link('&larr; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &rarr;') ?></div>
		</div>
	</div>
<?php $wp_query = null; $wp_query = $temp;?>
<?php get_footer(); ?>
