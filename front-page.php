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
            <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-7 groups-by-day">
<?php
// your taxonomy name
$tax = 'day_of_week';

// get the terms of taxonomy
$terms = get_terms( $tax, $args = array(
  'hide_empty' => false, // do not hide empty terms
  'orderby' => 'term_id',    
));

// loop through all terms
foreach( $terms as $term ) {

    // Get the term link
    $term_link = get_term_link( $term );

        // display link to term archive
        echo '<li class="calendar-icon"><h4><a href="' . esc_url( $term_link ) . '">' . $term->name .'</a></h4></li>';

}
?>
            </ul>
    </div>
</div>
<?php get_footer(); ?>