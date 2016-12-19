<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

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
      <div class="small-12 medium-3 large-3 columns pcright" data-equalizer-watch >
<?php get_sidebar(); ?>
        </div>
</div>
<?php get_footer(); ?>
