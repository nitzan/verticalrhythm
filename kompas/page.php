<?php
/**
 * Page tempalte
 *
 * @package kompas
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section id="content" role="main" <?php post_class(); ?>>
		
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		
		<div class="entry-content">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		
		<?php edit_post_link('Edit this entry.', '<p class="edit-post-link">', '</p>'); ?>
		
	</section>
	
<?php endwhile; endif; ?>

<?php get_footer(); ?>
