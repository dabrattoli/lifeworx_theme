<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package IRLLC Framework
 */

get_header(); ?>
<div class="small-12 medium-12 large-12 columns pagecontent" data-equalizer >

 <div class="small-12 medium-9 large-9 columns pcleft" data-equalizer-watch >
	<div id="primary" class="small-12 medium-12 large-12 columns content-area archives">
       <div class="row"> 
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
                <h1 class="page-title"><?php single_term_title(); ?> Groups</h1>
                <?php
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'grouplist' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
        </div>
	</div><!-- #primary -->
    </div>
    <div class="small-12 medium-12 large-12 columns sidebarcontainer" data-equalizer-watch >
<?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
