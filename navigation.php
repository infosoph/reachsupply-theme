<?php 
/**
 * The template part for the primary navigation menu.
 *
 * @package reachsupply
 */
?>
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'reachsupply' ); ?></a>

<header id="masthead" class="site-header" role="banner">
	<div class="site-header-logo">
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	</div><!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation anchor" role="navigation">
		<a class="menu-toggle" aria-controls="menu" aria-expanded="false"><i class="fa fa-bars fa-2x"></i>
		</a>
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->
