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
<?php if ( is_active_sidebar( 'sidebar-slider' ) ) : ?>
    <div class="medium-12 large-12 columns slider-container show-for-medium-up" >
		  <?php dynamic_sidebar( 'sidebar-slider' ); ?>
    </div>
    <?php endif; ?>
 <div class="small-12 medium-9 large-9 columns pcleft" data-equalizer-watch >

    <div class="row">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="small-12 medium-12 large-12 columns home-info">
            <?php
                // The Query
                $the_query = new WP_Query( array( 'pagename' => 'who-is-lifeworx' ) );
                // The Loop
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        ?>
                <div class="small-12 medium-12 large-12 columns who-is">
                <?php
                        the_title('<h2>','</h2>');
                        the_content('<p>','</p>');
                        ?>
                </div>
                <?php
                    }
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            ?>
                 <?php
                // The Query
                $the_query = new WP_Query( array( 'pagename' => 'criteria-for-membership' ) );
                // The Loop
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        ?>
                <div class="small-12 medium-12 large-12 columns criteria">
                <?php
                        the_title('<h2>','</h2>');
                        the_content('<p>','</p>');
                        ?>
                </div>
                <?php
                    }
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            ?>    
            
            </div>
            <?php if ( is_active_sidebar( 'request-info-sidebar' ) ) : ?>
                <div class="medium-12 large-12 columns request-info" >
                      <?php dynamic_sidebar( 'request-info-sidebar' ); ?>
                </div>
            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
        </div>
    </div>
   <div class="small-12 medium-3 large-3 columns pcright" data-equalizer-watch >
            <?php if ( is_active_sidebar( 'home-events-sidebar' ) ) { ?>
                <ul id="sidebar">
                    <?php dynamic_sidebar( 'home-events-sidebar' ); ?>
                </ul>
            <?php } ?>
    </div>  
    <div class="small-12 medium-12 large-12 columns featured-container" data-equalizer-watch>
            <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">
                      <?php
                // The Query
                $the_query = new WP_Query( array( 'category_name' => 'featured-service', 'order'=>'ASC' ) );
                // The Loop
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        ?>
                <?php
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 300,300 ), false, '' );        
                ?>
                <li> <a href="<?php the_permalink(); ?>">
                    <div style="border:2px solid #000; background:linear-gradient(rgba(0, 0, 0, 0.35),rgba(0, 0, 0, 0.20)), url(<?php echo $src[0]; ?>);background-repeat: no-repeat;background-position: center;min-height: 200px;margin-bottom: 10px;">
                    <?php
                        the_title('<h3>','</h3>');
                    ?>
                    </div>
                    </a>
                </li>
                <?php
                    }
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            ?>
            </ul>
    </div>
</div>
<?php get_footer(); ?>