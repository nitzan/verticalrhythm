<?php
/**
 * The main template file.
 *
 * @package kompas
 */

get_header();

// limit to one so the home page is the latest post
if ( !is_single() )
	query_posts('posts_per_page=1');
?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article id="content" role="main" <?php post_class(); ?>>
			
			<nav>
				<?php if ( function_exists('next_post_link_plus') ) : ?>
				<div class="nav-previous"><?php previous_post_link_plus( array(
					'order_by' => 'post_date',
					'meta_key' => '',
					'loop' => true,
					'thumb' => false,
					'max_length' => 0,
					'format' => '%link',
					'link' => '%title',
					'before' => '',
					'after' => '',
					'in_same_cat' => false,
					'ex_cats' => '',
					'num_results' => 1,
					'echo' => true
					) ); ?></div>
				<div class="nav-next"><?php next_post_link_plus( array(
					'order_by' => 'post_date',
					'meta_key' => '',
					'loop' => true,
					'thumb' => false,
					'max_length' => 0,
					'format' => '%link',
					'link' => '%title',
					'before' => '',
					'after' => '',
					'in_same_cat' => false,
					'ex_cats' => '',
					'num_results' => 1,
					'echo' => true
					) ); ?></div>
				<?php else : ?>
				<div class="nav-previous"><?php previous_post_link( '%link', '%title' ); ?></div>
				<div class="nav-next"><?php next_post_link( '%link', '%title' ); ?></div>
				<?php endif; ?>
			</nav>
			
			<header>
				<div class="entry-meta">
					<?php the_date(); ?>
				</div>
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h2' : 'h1'; ?>
				<<?php echo $heading_tag; ?> class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'kompas' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</<?php echo $heading_tag; ?>>
			</header>

			<div class="entry-content">
				<?php ( is_home() || is_front_page() ) ? the_excerpt() : the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'kompas' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->

		</article>
		
<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
