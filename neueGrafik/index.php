<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post">
				<div class="column info">
					<h5><?php the_ID(); ?></h5>
					<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a><br />
					Posted by <?php the_author(); ?> on
					<?php the_time('F j, Y'); ?> under
					<?php the_category(', '); ?> and tagged as
					<?php the_tags(''); ?>
				</div>
				<div class="postContent">
					<?php the_content(); ?>
				</div>
				<div class="clear"></div>
			</div>

	<?php endwhile; else: ?>

			<div class="post">
				<div class="column">
					404!
				</div>
				<div class="clear"></div>
			</div>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
