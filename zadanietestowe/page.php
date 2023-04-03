<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zadanie_testowe
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if(is_page('strona-glowna')) {

			get_template_part( 'template-parts/content', 'page-strona-glowna' );
		}
		elseif(is_page('blog')) {
			get_template_part( 'template-parts/content', 'page-blog' );
		}
		elseif(is_page('kontakt')) {
			get_template_part( 'template-parts/content', 'page-kontakt' );
		}

		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
