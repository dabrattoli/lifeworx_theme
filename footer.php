<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package IRLLC Framework
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="small-12 medium-12 large-12 columns site-footer" role="contentinfo">
        <div class="small-12 medium-12 large-12 columns site-footer-grid" data-equalizer>
            <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3 footerlist">
                <li data-equalizer-watch>
                    <div class="small-12 medium-6 large-6 columns footer-contentinfo-logo show-for-medium-up">
                         <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> 
                <img alt="ACL Logo" src="<?php echo get_bloginfo('stylesheet_directory');?>/images/footer-ACL_Logo.png"> 
                </a>
                    </div>
                    <div class="small-12 medium-8 large-8 columns footer-contentinfo" style="    float: left;padding-left: 0;">
                        <h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
                           <?php
                // The Query
                $the_query = new WP_Query( array( 'pagename' => 'contact-info' ) );
                // The Loop
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        the_content();
                    }
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            ?>  
                    </div>
                </li>
                <li style="text-align: center;" data-equalizer-watch>
                <div class="small-12 medium-12 large-12 columns footermenu  show-for-medium-up">
                         <h3>Links</h3>
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
                    </div>
                </li>
                <li class="support-container">
                <div class="small-12 medium-12 large-12 columns nopadding footer-connect-links">
                        <h3 style="text-align: center;">Supported By</h3>
                    </div>
                    <div class="small-12 medium-12 large-12 columns nopadding">
                        <?php if ( is_active_sidebar( 'sidebar-support-footer' ) ) { ?>
                            <ul id="sidebar">
                                <?php dynamic_sidebar( 'sidebar-support-footer' ); ?>
                            </ul>
                        <?php } ?>
                    </div>
                </li>
               
            </ul>
        </div>
		<div class="small-12 medium-12 large-12 columns site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'irrlc_framework' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'irrlc_framework' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Custom Theme: %1$s %2$s.', 'irrlc_framework' ), 'Lifeworx Theme', 'Built by <a href="http://www.infiniterealityllc.com" rel="designer">Infinite Reality LLC</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
