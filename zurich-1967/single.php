<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="yellow-box">

<h3><?php the_title(); ?></h3>
<div <?php if(function_exists('post_class')) : ?><?php post_class(); ?><?php else : ?>class="post post-<?php the_ID(); ?>"<?php endif; ?>>
<div class="content">
<?php
	$values = get_post_custom_values("multimedia");
	if (isset($values[0])) {
	?>
<div class="multimedia">
	<?php $values = get_post_custom_values("multimedia"); echo $values[0]; ?>
</div>
<div class="clear"></div>
<?php } ?>

<?php the_content(); ?>
</div>
</div>



<div class="nav prev left"><?php next_post_link('%link', '&larr;', TRUE); ?></div>
<div class="nav next right"><?php previous_post_link('%link', '&rarr;', TRUE); ?></div>
<div class="clear"></div>



			<?php endwhile; else : ?>

	

			<?php endif; ?>

</div>

<?php get_footer(); ?>