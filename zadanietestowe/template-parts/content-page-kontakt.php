<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zadanie_testowe
 */

get_header();
?>

	<main>

		<section class="phone"><!--section__phone-->

			<div class="phone--row">

				<div class="col">

					<div class="phone--padding">
						<h1>Kontakt </h1>
						<div class="phone--desc">From year to year we strive to invent the most innovative technology that is used by both small enterprises and space enterprises.</div>

						<div class="phone--2row">
							<button class="phone--column phone--button_color ">Placeholder</button>
							<div class="phone__column--width">
				 			<a class="phone__column--text" href="tel:48023492483">+48 023 492 483</a>
						</div>
	   					</div><!--phone--2row-->
	   
					</div><!--phone--padding-->

				</div><!--col-->

				<div class="col">

					<div class="phone__img"></div>

				</div><!--col-->

			</div><!--section__phone--row-->

		</section><!--section__phone-->

	</main><!-- #main -->

<?php
get_footer();
