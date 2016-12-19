<?php
/**
 * @package IRLLC Framework
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<p class="the-date"><?php echo get_the_date(); ?></p>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
			  <?php wpbeginner_numeric_posts_nav(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php irrlc_framework_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
