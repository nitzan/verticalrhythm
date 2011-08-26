<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package package
 */

get_header(); ?>

	<section id="content" role="main">
		
		<header>
			<h1 class="entry-title"><?php _e( '404', 'kompas' ); ?></h1>
		</header>
		
		<div class="entry-content">
			<p><?php _e( 'Apologies, but the page you requested could not be found. Please proceed from the home page.', 'kompas' ); ?></p>
		</div>
		
	</section>

<?php get_footer(); ?>