<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package reachsupply
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php global $is_IE; if ( $is_IE ) : ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<?php endif; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed">
		<div class="nav-wrapper">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'reachsupply' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="mobile-logo">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'reachsupply' ); ?>
					</button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
		</div><!-- .nav-wrapper -->
		<div id="content-wrapper" class="container">
			<div id="content" class="site-content">
