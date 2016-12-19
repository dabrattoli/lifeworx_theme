<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package IRLLC Framework
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'irrlc_framework' ); ?></a>

	<header id="masthead" class="small-12 medium-12 large-12 columns site-header" role="banner">
        <div class="small-12 medium-12 large-12 columns nopadding show-for-small-only mobile-menu">
 <div class="contain-to-grid sticky">
	<nav class="top-bar" data-topbar role="navigation">
         <ul class="title-area">
            <li class="name show-for-small-only">
                 <h1 class="mobile-header"><a href="#"><?php bloginfo( 'name' ); ?></a></h1>
            </li>
            <!-- Mobile Menu Toggle -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a>
            </li>
        </ul>
    <section class="top-bar-section"> <!-- Right Nav Section -->
        <ul class="left">
    	<?php wp_nav_menu( array( 'theme_location' => 'mobile-primary' ) ); ?>
     	</ul>
    
     </section>
    </nav>
    </div>
</div> 
        <div class="small-12 medium-12 large-12 columns nopadding show-for-medium-up">
 <div class="contain-to-grid member-mainmenu">
	<nav class="top-bar" data-topbar role="navigation">
         <ul class="title-area">
            <li class="name show-for-small-only">
                 <h1><a href="#">Member Menu</a></h1>

            </li>
            <!-- Mobile Menu Toggle -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a>
            </li>
        </ul>
    <section class="top-bar-section"> <!-- Right Nav Section -->
    	<ul class="left">
    	<?php wp_nav_menu( array( 'theme_location' => 'member-menu' ) ); ?>
     	</ul>
        
     </section>
    </nav>
    </div>
</div>        
  <div class="small-12 medium-9 large-9 columns nopadding">	
            <div class="small-12 medium-3 large-3 columns site-branding-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> 
                <img alt="ACL Logo" src="<?php echo get_bloginfo('stylesheet_directory');?>/images/ACL_Logo.png"> 
                </a>
            </div>
            <div class="small-12 medium-9 large-9 columns site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
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
    </div><!-- .site-branding -->
    <div class="medium-3 large-3 columns site-connect nopadding show-for-medium-up">	
        <div class="small-12 medium-12 large-12 columns search-container">
             <?php if ( is_active_sidebar( 'sidebar-search' ) ) : ?>
                      <?php dynamic_sidebar( 'sidebar-search' ); ?>
            <?php endif; ?>
        </div>
        <div class="small-12 medium-12 large-12 columns header-social">
            <h4>Find Us On</h4>
            <ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-2 social-icons-header">
			     <li style="text-align: right;"><a href="https://www.facebook.com/AshlandCountyLifeworx"><i class="fi-social-facebook"></i></a></li>
                <li style="text-align: left;"><a href="https://www.linkedin.com/in/amy-flannigan-164a1373"><i class="fi-social-linkedin"></i></a></li>
            </ul>
        </div>        
    </div>
       <div class="small-12 medium-12 large-12 columns home-menu">
        <div class="small-12 medium-12 large-12 columns nopadding show-for-medium-up">
 <div class="contain-to-grid mainmenu sticky">
	<nav class="top-bar" data-topbar role="navigation">
         <ul class="title-area">
            <li class="name show-for-small-only">
                 <h1><a href="#"><?php bloginfo( 'name' ); ?></a></h1>

            </li>
            <!-- Mobile Menu Toggle -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a>
            </li>
        </ul>
    <section class="top-bar-section"> <!-- Right Nav Section -->
    	<ul class="left">
    	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
     	</ul>
        
     </section>
    </nav>
    </div>
</div> 
    </div>
                <div class="small-12 medium-12 large-12 columns nopadding hide-for-medium-up">
 <div class="contain-to-grid mainmenu">
	<nav class="top-bar" data-topbar role="navigation">
         <ul class="title-area">
            <li class="name show-for-small-only">
                 <h1><a href="#">Member Menu</a></h1>

            </li>
            <!-- Mobile Menu Toggle -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a>
            </li>
        </ul>
    <section class="top-bar-section"> <!-- Right Nav Section -->
    	<ul class="left">
    	<?php wp_nav_menu( array( 'theme_location' => 'member-menu' ) ); ?>
     	</ul>
        
     </section>
    </nav>
    </div>
</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
