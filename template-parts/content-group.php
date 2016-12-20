<?php
/**
 * @package IRLLC Framework
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">Group: ', '</h1>' ); ?>

		<div class="entry-meta">
			<p class="the-date"><?php //echo get_the_date(); ?></p>
            <?php
            
            $categories = get_the_terms( get_the_id(), 'day_of_week' );
if ( is_array( $categories ) ) {
    foreach ( $categories as $category ) {
        echo '<h4>Meets on <a href="' . get_term_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></h4> ';
    }
}
            ?>
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
