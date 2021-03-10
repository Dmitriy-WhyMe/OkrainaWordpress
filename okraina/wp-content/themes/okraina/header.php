<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package okraina
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/Montserrat-Medium.woff2" as="font" crossorigin="anonymous">
	<link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/Montserrat-Bold.woff2" as="font" crossorigin="anonymous">
	<link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/Montserrat-Regular.woff2" as="font" crossorigin="anonymous">
	<link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/Montserrat-SemiBold.woff2" as="font" crossorigin="anonymous">
	<link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/Montserrat-ExtraBold.woff2" as="font" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/fonts.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/libs.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<main class="page-container">
		<div class="corporate_network">
			<div class="parallax_1" id="scene_1">
		    	<img class="paralax_1_1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_1_1.webp" alt="" data-depth="1.5">
		        <img class="paralax_1_2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_1_2.webp" alt="" data-depth="1.6">
		        <img class="paralax_1_3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_1_3.webp" alt="" data-depth="1.7">
		        <img class="paralax_1_4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_1_4.webp" alt="" data-depth="1.5">
		        <img class="paralax_1_5" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_1_5.webp" alt="" data-depth="1.6">
		        <img class="paralax_1_6" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_1_6.webp" alt="" data-depth="1.7">
		        <img class="paralax_1_7" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_1_7.webp" alt="" data-depth="1.5">
		    </div>
		    <div class="container">
		    	<div class="header">
		          <div class="reverse">
		            <div class="menu">
		              <nav class="main-nav main-nav-dop" role="navigation">
		                <!-- Mobile menu toggle button (hamburger/x icon) -->
		                <input id="main-menu-state" type="checkbox" />
		                <label class="main-menu-btn" for="main-menu-state">
		                  <span class="main-menu-btn-icon"></span> Toggle main menu visibility
		                </label>
		                <!-- Sample menu definition -->
		                <ul id="main-menu" class="sm sm-clean">
		                  <li>
		                    <a href="#yak1">О нас</a>
		                  </li>
		                  <li>
		                    <a href="#yak2">Преимущества</a>
		                  </li>
		                  <li>
		                    <a href="#yak3">История</a>
		                  </li>
		                  <li>
		                    <a href="#yak4">Новости</a>
		                  </li>
		                  <li>
		                    <a href="#yak5">Контакты</a>
		                  </li>
		                </ul>
		              </nav>
		            </div>
		            <div class="logo">
		              <a href="index.html">
		              	<?php if( has_custom_logo() ): the_custom_logo(); ?>
						    <?php else: ?>
						    <a  href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
						<?php endif; ?>
		                
		              </a>
		            </div>
		          </div>
		          <div class="header-social">
		          <?php $hero_12 = get_field('header_social_ico');
              		if( $hero_12 ): ?>
		            <a class="social-f" href="<?php echo $hero_12['link_1']; ?>" target="_blank">
		              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/facebook.svg" alt="">
		            </a>
		            <a class="social-vk" href="<?php echo $hero_12['link_2']; ?>" target="_blank">
		              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/vk.svg" alt="">
		            </a>
		            <a class="social-inst" href="<?php echo $hero_12['link_3']; ?>" target="_blank">
		              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/instagram.svg" alt="">
		            </a>
		          </div>
		          <?php endif; ?>
		          <div class="header-phone">
		            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/phone-call.svg" alt="">
		            <?php if(!dynamic_sidebar('sidebar-1')); ?>
		          </div>
        		</div>
