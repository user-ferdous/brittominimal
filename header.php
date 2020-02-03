<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brittominimal
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'brittominimal' ); ?></a>
		<header id="masthead" class="site-header" role="banner">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="top-nav container">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span class="m_menu_icon"></span>
						<span class="m_menu_icon"></span>
						<span class="m_menu_icon"></span>
					</button>
					<div class="logo">
					
					
					  <?php 
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                     ?>
					 
					
                    <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
     <a href="<?php echo esc_url ( get_home_url()); ?>">
                  <img src="<?php echo $image[0]; ?>" alt="logo">
				  </a>
          <?php else : ?> 
		  <a href="<?php echo  esc_url ( get_home_url()); ?>">
        <img src="<?php echo esc_url (get_stylesheet_directory_uri()); ?>/icons/logo.png" alt="<?php bloginfo( 'name' ); ?>" width="150" height="50" /></a>
		</a>
            <?php endif; ?>
                       
					</div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					
					
				</div>
			</nav><!-- #site-navigation -->
		</header>

			<div id="content" class="site-content">
