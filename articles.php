<?php
/**
 * Template Name: Articles Page Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>
<div class="small-12 medium-12 large-12 columns pagecontent" data-equalizer >
<div class="medium-2 large-2 columns show-for-medium-up vert-menu" data-equalizer-watch >
    <div class="medium-12 large-12 columns vert-menu-holder">
        <ul class="vertical dropdown menu" data-dropdown-menu>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </ul>
    </div> 
     <?php get_sidebar(); ?>
</div>
 <div class="small-12 medium-10 large-10 columns pc-left" data-equalizer-watch >
    <div class="row">
         <div class="small-12 medium-12 larger-12 columns">
     	<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'articles' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
     
     </div> 
    <div class="small-12 medium-12 larger-12 columns">    
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php    
            $args = array(
                'post_type' => 'post',
                'orderby' => 'title',
	            'order'   => 'DESC',
            );
            $query = new WP_Query( $args );
            
        ?>
        <?php if ( $query->have_posts() ) : ?>

            <!-- pagination here -->

            <!-- the loop -->
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="small-12 medium-12 large-12 columns section-article">
                <?php the_title( sprintf( '<h2 class="article-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                <p><?php irrlc_framework_posted_on(); ?></p>
                <p><?php the_excerpt(); ?></p>
            </div>
            <?php endwhile; ?>
            <?php wpbeginner_numeric_posts_nav(); ?>

            <!-- end of the loop -->

            <!-- pagination here -->

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

		
		</main><!-- #main -->
	</div><!-- #primary -->
        </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
