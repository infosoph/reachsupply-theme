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

		<div id="content-wrapper" class="container">
			<div id="content" class="site-content">
