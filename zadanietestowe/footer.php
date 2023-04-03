<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zadanie_testowe
 */

?>

<footer class="footer">

    <div class="footer__wrapper">

       
        <div class="img__logo footer__logo--margin"> <?php the_custom_logo(); ?></div>
        

        <div class="footer--row footer--column"> <!--footer--nav-->
        
                <div class="footer_description">From year to year we strive to invent the most innovative technology that is used by both small enterprises and space enterprises.</div>       
            <?php
                $menu = wp_nav_menu( array(
			 	'theme_location' => 'footer-menu',
			 	'menu'            => 'Footer',
    			'container'       => '',
    			'container_class' => '',
    			'container_id'    => '',
    			'menu_class'      => 'footer__nav footer__nav--margin',
    			'menu_id'         => '',
    			'echo'            => true,
    			'fallback_cb'     => false,
				'list_item_class' => 'footer__nav--item',
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
        </div><!--footer--nav-->
        
            <div class="footer__table--line"><hr></div>

        <div class="down--row"><!--footer--bottom-->

            <div class="site__name">© Mobilizacja Biznesu <?php echo date('Y') ?></div>
            <div class="policy">Polityka prywatności</div>
            <div class="credential">Projekt strony internetowej stworzony przez Agencję Interaktywną Wzór</div>

        </div><!--footer--bottom-->
        
    </div><!--footer__wrapper-->
    <?php wp_footer(); ?>
</footer>

</body>
</html>
