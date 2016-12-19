<?php
/**
 * The template for displaying all single posts.
 *
 * @package IRLLC Framework
 */

get_header(); ?>
<div class="small-12 medium-12 large-12 columns pagecontent" data-equalizer >

 <div class="small-12 medium-9 large-9 columns pcleft" data-equalizer-watch >

    <div class="row">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
     </div>
    </div>
     <div class="small-12 medium-12 large-12 columns sidebarcontainer" data-equalizer-watch >
<?php get_sidebar(); ?>
        </div>
</div>
<?php get_footer(); ?>
