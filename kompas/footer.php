<?php
/**
 * The template for displaying the footer.
 *
 * @package kompas
 */
?>
	<footer id="footer" role="contentinfo">
		<div id="site-info">
			<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				
			<a href="http://www.flickr.com/photos/blankaposters/3749545039/in/set-72157605194372046/"><?php _e('designed by', 'kompas'); ?> Wim Crouwel</a>
			&amp;
			<a href="http://sanchothefat.com/" rel="made"><?php _e('built by', 'kompas'); ?> Robert O&rsquo;Rourke</a>
		</div>
	</footer>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
