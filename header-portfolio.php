<?php
/**
 * @package WordPress
 * @subpackage Catt_Theme
 */

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?> - <?php wp_title(''); ?> <?php if ( !(is_404()) && (is_single()) or (is_page()) or (is_archive()) ) { ?> <?php } ?> </title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/print.css" media="print">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
</head>
<body data-spy="scroll" data-target="#scroll-links" <?php body_class(); ?>>
<?php include_once("analyticstracking.php") ?>

<!-- header -->
<header role="banner" class="sitenav" id="top">
	<nav role="navigation sitemap">
		<div class="title left"><a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">The Catt Suite</a></div>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu right' ) ); ?>
		<div class="clearfix"></div>
	</nav>
</header>