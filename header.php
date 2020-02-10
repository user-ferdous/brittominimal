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
<?php wp_body_open(); ?>
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
					<div class="sitelogo">				
					  <?php 
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                     ?>
					 
					
                    <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
     <a href="<?php echo esc_url ( get_home_url()); ?>">
	              <div class="logo">
                  <img src="<?php echo $image[0]; ?>" alt="logo">
				  </a>
				  </div>
          <?php else : ?> 
		  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
            <?php endif; ?>
                       
					</div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					
					
				</div>
			</nav><!-- #site-navigation -->
		</header>

			<div id="content" class="site-content">
