  <?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zadanie_testowe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>

<header id="nav--mobile">
	<div class="nav__bar"><!--nav__bar-->

  
	<a href=""> <?php the_custom_logo(); ?></a>

	<div id="nav" class="nav__btn--line">
 
 			<nav class="nav">

		<?php 
		
		$menu = wp_nav_menu( array(
			 	'theme_location' => 'header-menu',
			 	'menu'            => '',
    			'container'       => 'div',
    			'container_class' => 'nav',
    			'container_id'    => '',
    			'menu_class'      => 'nav__list',
    			'menu_id'         => '',
    			'echo'            => true,
    			'fallback_cb'     => false,
				'list_item_class' => 'nav__list--item',
				'link_class'   	  => 'nav__link',
    			'before'          => '',
    			'after'           => '',
    			'link_before'     => '',
    			'link_after'      => '',
    			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    			'depth'           => 0,
    			'walker'          => new Walker_Extend_Menu()
			 )); 
			 
			 ?>

			</nav>

			<?php 
		
		$button = wp_nav_menu( array(
			 	'theme_location' => 'primary',
			 	'menu'            => 'Button',
    			'container'       => '',
    			'container_class' => '',
    			'container_id'    => '',
    			'menu_id'         => '',
    			'echo'            => true,
    			'fallback_cb'     => false,
				'list_item_class' => '',
				'link_class'   	  => 'nav__link',
    			'before'          => '',
    			'after'           => '',
    			'link_before'     => '',
    			'link_after'      => '',
    			'items_wrap'      => '<button class="nav__btn--border nav__button">%3$s</button>',
    			'depth'           => 0,
    			'walker'          => new Walker_Button()
			 )); 
			 ?>

	</div><!--btn_nav-->

  				<div class="icon">
    				<div class="nav__hamburger"></div>
					<div class="nav__hamburger"></div>
				</div>

	</div><!--nav_bar-->
</header><!-- #masthead -->
