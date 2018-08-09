<?php
/**
 * The Header for our theme.
 */
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<div>

	<header>
		
		<h1><a class="hidden-element" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>

	</header>
