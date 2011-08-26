<?php
/**
 * Template Name: Archive
 *
 * @package kompas
 */

get_header(); ?>

	<section id="content" role="main" <?php post_class(); ?>>
		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		
		<div class="entry-content">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		
		<?php edit_post_link('Edit this entry.', '<p class="edit-post-link">', '</p>'); ?>
		
	
<?php endwhile; endif; wp_reset_query(); ?>


<?php query_posts('posts_per_page=-1'); if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class(); ?>>
			
			<header>
				<div class="entry-meta">
					<?php the_date(); ?>
				</div>
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'kompas' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
			</header>
	
		</article>
	
<?php endwhile; endif; ?>


	</section>

<?php get_footer(); ?>
