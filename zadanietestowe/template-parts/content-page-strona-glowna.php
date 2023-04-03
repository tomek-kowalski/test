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
wp_head();
?>

	<main>

		<section class="phone"><!--section__phone-->

			<div class="phone--row">

				<div class="col">
<?php 
$front_data	= wp_get_recent_posts(array(
    'post_type'		   => 'front-page',
	'postnumber'	   =>  1,
	'post_status' 	   => 'publish',
	'orderby'          => 'post_date',
	'order'            => 'DESC',
));

foreach($front_data as $data) :
	$postid = $data['ID'];

    $title      = get_post_meta( $postid, 'front-page_title', true );
    $text       = get_post_meta( $postid, 'front-page_text', true );
    $button_url = get_post_meta( $postid, 'front-page_button_url', true );
    $btn_text   = get_post_meta( $postid, 'front-page_btn_text', true );
    $phone_no   = get_post_meta( $postid, 'front-page_phone_no', true );
    $image      = get_post_meta( $postid, 'front-page_image', true );
    //$button_ndt = get_post_meta( $postid, 'front-page_ndt', true );

//section up
    $image_up      = get_post_meta( $postid, 'front-page_image_up', true );
    $title_up      = get_post_meta( $postid, 'front-page_title_up', true );
    $image_up_1    = get_post_meta( $postid, 'front-page_image_up_1', true );
    $text_up_1     = get_post_meta( $postid, 'front-page_text_up_1', true );
    $text_up_2     = get_post_meta( $postid, 'front-page_text_up_2', true );
    $text_up_3     = get_post_meta( $postid, 'front-page_text_up_3', true );
    $text_up_4     = get_post_meta( $postid, 'front-page_text_up_4', true );

//section middle
    $text_middle_1        = get_post_meta( $postid, 'text_middle_1', true );
    $text_middle_2        = get_post_meta( $postid, 'text_middle_2', true );
    $text_middle_3        = get_post_meta( $postid, 'text_middle_3', true );
    $text_middle_4        = get_post_meta( $postid, 'text_middle_4', true );
    $text_middle_5        = get_post_meta( $postid, 'text_middle_5', true );
    $text_middle_6        = get_post_meta( $postid, 'text_middle_6', true );
    $text_middle_7        = get_post_meta( $postid, 'text_middle_7', true );
    $text_middle_8        = get_post_meta( $postid, 'text_middle_8', true );
    $text_middle_9        = get_post_meta( $postid, 'text_middle_9', true );
    $text_middle_10       = get_post_meta( $postid, 'text_middle_10', true );
    $text_middle_11       = get_post_meta( $postid, 'text_middle_11', true );
    $text_middle_12       = get_post_meta( $postid, 'text_middle_12', true );
    $text_middle_btn      = get_post_meta( $postid, 'text_middle_btn', true );

//section down
    $title_down           = get_post_meta( $postid, 'down_title', true );
    $image_down_1         = get_post_meta( $postid, 'image_down_1', true );
    $title_down_1         = get_post_meta( $postid, 'title_down_1', true );
    $text_down_1          = get_post_meta( $postid, 'text_down_1', true );
    $image_down_2         = get_post_meta( $postid, 'image_down_2', true );
    $title_down_2         = get_post_meta( $postid, 'title_down_2', true );
    $text_down_2          = get_post_meta( $postid, 'text_down_2', true );
    $image_down_3         = get_post_meta( $postid, 'image_down_3', true );
    $title_down_3         = get_post_meta( $postid, 'title_down_3', true );
    $text_down_3          = get_post_meta( $postid, 'text_down_3', true );
    $image_down_4         = get_post_meta( $postid, 'image_down_4', true );
    $title_down_4         = get_post_meta( $postid, 'title_down_4', true );
    $text_down_4          = get_post_meta( $postid, 'text_down_4', true );
    $image_down_5         = get_post_meta( $postid, 'image_down_5', true );
    $title_down_5         = get_post_meta( $postid, 'title_down_5', true );
    $text_down_5          = get_post_meta( $postid, 'text_down_5', true );
    $image_down_6         = get_post_meta( $postid, 'image_down_6', true );
    $title_down_6         = get_post_meta( $postid, 'title_down_6', true );
    $text_down_6          = get_post_meta( $postid, 'text_down_6', true );
    $image_down_7         = get_post_meta( $postid, 'image_down_7', true );
    $title_down_7         = get_post_meta( $postid, 'title_down_7', true );
    $text_down_7          = get_post_meta( $postid, 'text_down_7', true );
    $image_down_8         = get_post_meta( $postid, 'image_down_8', true );
    $title_down_8         = get_post_meta( $postid, 'title_down_8', true );
    $text_down_8          = get_post_meta( $postid, 'text_down_8', true );
   
    $title_down_row        = get_post_meta( $postid, 'title_down_row', true );
    $placeholder_down      = get_post_meta( $postid, 'placeholder_down', true );
?>
					<div class="phone--padding">
						<h1><?php echo isset($title) ? $title : false; ?> </h1>
						<div class="phone--desc"><?php echo isset($text) ? $text : false; ?>.</div>

						<div class="phone--2row">
							<button class="phone--column phone--button_color "><?php echo isset($btn_text) ? $btn_text : false; ?></button>
							<div class="phone__column--width">
				 			<a class="phone__column--text" href=""><?php echo isset($phone_no) ? $phone_no : false ?></a>
						</div>
	   					</div><!--phone--2row-->
	   
					</div><!--phone--padding-->

				</div><!--col-->

				<div class="col">

					<img class="phone__img" src="<?php echo isset($image) ? $image : false; ?>">

				</div><!--col-->

			</div><!--section__phone--row-->

		</section><!--section__phone-->

		<section class="up"><!--section--up-->

		<div class="up__wrapper">

			<div class="col__up--39 up__order--2">
				<img class="up__img" src="<?php echo isset($image_up) ? $image_up : false; ?>">
			</div><!--col-->

			<div class="col up__order--1">
			<div class="col--padding_margin">   
				<?php echo isset($title_up) ? $title_up : false; ?>
			</div> 

			<div class="up__list--text">
				<ul>
					<li class="circle"><img src="<?php echo isset($image_up_1) ? $image_up_1 : false; ?>"><span><?php echo isset($text_up_1) ? $text_up_1 : false; ?></span></li>
					<li class="circle"><img src="<?php echo isset($image_up_1) ? $image_up_1 : false; ?>"><span><?php echo isset($text_up_2) ? $text_up_2 : false; ?></span></li>
					<li class="circle"><img src="<?php echo isset($image_up_1) ? $image_up_1 : false; ?>"><span><?php echo isset($text_up_3) ? $text_up_3 : false; ?></span></li>
					<li class="circle"><img src="<?php echo isset($image_up_1) ? $image_up_1 : false; ?>"><span><?php echo isset($text_up_4) ? $text_up_4 : false; ?></span></li>
				</ul>
			</div><!--up__list--text-->

			</div><!--col-->

			</div>

		</section><!--section--up-->

		<section class="middle"><!--section--middle-->
			<div class="middle__wrapper">

				<div class="middle__table">
					<div class="table__col">

						<ul class="middle__table--ul">
							<li class="table__number"><mark><?php echo isset( $text_middle_1 ) ? $text_middle_1 : false; ?></mark></li>
							<li class="table__text"><?php echo isset( $text_middle_2 ) ? $text_middle_2 : false; ?></li>
							<li class="table__number"><mark><?php echo isset( $text_middle_3 ) ? $text_middle_3 : false; ?></mark></li>
							<li class="table__text"><?php echo isset( $text_middle_4 ) ? $text_middle_4 : false; ?></li>
						</ul>

					</div><!--col__one--table-->

					<div class="table__col">

						<ul class="middle__table--ul">
							<li class="table__number"><mark><?php echo isset( $text_middle_5 ) ? $text_middle_5 : false; ?></mark></li>
							<li class="table__text"><?php echo isset( $text_middle_6 ) ? $text_middle_6 : false; ?></li>
							<li class="table__number"><mark><?php echo isset( $text_middle_7 ) ? $text_middle_7 : false; ?></mark></li>
							<li class="table__text"><?php echo isset( $text_middle_8 ) ? $text_middle_8 : false; ?></li>
						</ul>
		
					</div><!--col__two--table-->

					<div class="table__col">
						<ul class="middle__table--ul">
						 	<li class="table__number"><mark><?php echo isset( $text_middle_9 ) ? $text_middle_9 : false; ?></mark></li>
							<li class="table__text"><?php echo isset( $text_middle_10 ) ? $text_middle_10 : false; ?></li>
							<li class="table__number"><mark><?php echo isset( $text_middle_11 ) ? $text_middle_11 : false; ?></mark></li>
							<li class="table__text"><?php echo isset( $text_middle_12 ) ? $text_middle_12 : false; ?></li>
						</ul>

				    </div><!--col__three--table-->

				</div><!--middle__table-->

				<div class="middle__table--line"><hr></div>

					<div class="middle__line--button">

					<div class="middle__button"><?php echo isset($text_middle_btn ) ? $text_middle_btn : false; ?></div>
			</div><!--middle__wrapper-->
		</section><!--section--middle-->

		<section class="down"><!--section--down-->

			<div class="down__wrapper">

					<div class="down__title--margin_padding">
						<h2><?php echo isset( $title_down ) ? $title_down : false; ?></h2>
					</div>
	
				<div class="down--row">

					<div class="down--columns">
		
						<img class="down__image--1" src="<?php echo isset( $image_down_1 ) ? $image_down_1 : false; ?>">

						<div class="down__column--title">
							<h3><?php echo isset( $title_down_1 ) ? $title_down_1 : false; ?></h3>
						</div>
							<p class="down--desc"><?php echo isset( $text_down_1 ) ? $text_down_1 : false; ?></p>

					</div><!--down--columns-->
		
					<div class="down--columns">

					<img class="down__image--3" src="<?php echo isset( $image_down_3 ) ? $image_down_3 : false; ?>">

						<div class="down__column--title">
							<h3><?php echo isset( $title_down_3 ) ? $title_down_3 : false; ?></h3>
						</div>
							<p class="down--desc"><?php echo isset( $text_down_3 ) ? $text_down_3 : false; ?></p>

					</div><!--down--columns-->
		
					<div class="down--columns">

					<img class="down__image--5" src="<?php echo isset( $image_down_5 ) ? $image_down_5 : false; ?>">

						<div class="down__column--title">
							<h3><?php echo isset( $title_down_5 ) ? $title_down_5 : false; ?></h3>
						</div>
							<p class="down--desc"><?php echo isset( $text_down_5 ) ? $text_down_5 : false; ?></p>
			
						</div><!--down--columns-->

						<div class="down--columns">
		
						<img class="down__image--7" src="<?php echo isset( $image_down_7 ) ? $image_down_7 : false; ?>">
		
							<div class="down__column--title">
								<h3><?php echo isset( $title_down_7 ) ? $title_down_7 : false; ?></h3>
							</div>
								<p class="down--desc"><?php echo isset( $text_down_7 ) ? $text_down_7 : false; ?></p>

						</div><!--down--columns-->

						</div><!--down--row-->

						<div class="down--row--2">

							<div class="down--columns">
	
							<img class="down__image--2" src="<?php echo isset( $image_down_2 ) ? $image_down_2 : false; ?>">

							<div class="down__column--title">
								<h3><?php echo isset( $title_down_2 ) ? $title_down_2 : false; ?></h3>
							</div>
								<p class="down--desc"><?php echo isset( $text_down_2 ) ? $text_down_2 : false; ?></p>

						</div><!--down--columns-->
	
						<div class="down--columns">

						<img class="down__image--4" src="<?php echo isset( $image_down_4 ) ? $image_down_4 : false; ?>">

							<div class="down__column--title">
							<h3><?php echo isset( $title_down_4 ) ? $title_down_4 : false; ?></h3>
							</div>
								<p class="down--desc"><?php echo isset( $text_down_4 ) ? $text_down_4 : false; ?></p>
		
						</div><!--down--columns-->
	
						<div class="down--columns">

						<img class="down__image--6" src="<?php echo isset( $image_down_6 ) ? $image_down_6 : false; ?>">

							<div class="down__column--title">
								<h3><?php echo isset( $title_down_6 ) ? $title_down_6 : false; ?></h3>
							</div>
							<p class="down--desc"><?php echo isset( $text_down_6 ) ? $text_down_6 : false; ?></p>
		
						</div><!--down--columns-->

						<div class="down--columns">

						<img class="down__image--8" src="<?php echo isset( $image_down_8 ) ? $image_down_8 : false; ?>">

							<div class="down__column--title">
								<h3><?php echo isset( $title_down_8 ) ? $title_down_8 : false; ?></h3>
							</div>
								<p class="down--desc"><?php echo isset( $text_down_8 ) ? $text_down_8 : false; ?></p>

						</div><!--down--columns-->

					</div><!--down--row-->

					<div class="down--row row__margin--top--bottom">

						<div class="down__column--start">
							<h2><?php echo isset($title_down_row) ? $title_down_row : false; ?></h2>
						</div>

						<div class="down__column--end">
							<div class="down__btn"><?php echo isset($placeholder_down) ? $placeholder_down : false; ?></div>
						</div>

					</div><!--down--row-->

						<div class="down__column--wrapper">

							<div class="down--row  flex--wrap"> <!--images-->

								<div class="columns__posts">

								<img class="posts__image--3" src="<?php echo get_stylesheet_directory_uri().'/images/5_steps_chart.png'; ?>">
											<h3>5 steps to creating a stakeholder engagement plan</h3>
												<div class="down--row margin__top--16">
											<div class="date">22 kwietnia 2022</div><div class="down__more">Czytaj</div>
											<img class="arrow" src="<?php echo get_stylesheet_directory_uri() . '/images/arrow.png'; ?>">
												</div>
									</div><!--columns--posts-->

								<div class="columns__posts">

									<img class="posts__image--2" src="<?php echo get_stylesheet_directory_uri() . '/images/5_steps_columns.png'; ?>">
											<h3>5 steps to creating a stakeholder engagement plan</h3>
												<div class="down--row margin__top--16">
											<div class="date">22 kwietnia 2022</div><div class="down__more">Czytaj</div>
											<img class="arrow" src="<?php echo get_stylesheet_directory_uri() . '/images/arrow.png'; ?>">
												</div>
									</div><!--columns--posts-->

								<div class="columns__posts">

									<img class="posts__image--3" src="<?php echo get_template_directory_uri().'/images/5_steps_view.png'; ?>">
											<h3>5 steps to creating a stakeholder engagement plan</h3>
												<div class="down--row margin__top--16">
											<div class="date">22 kwietnia 2022</div><div class="down__more">Czytaj</div>
											<img class="arrow" src="<?php echo get_stylesheet_directory_uri() . '/images/arrow.png'; ?>">
												</div>
									</div><!--columns--posts-->

									<?php endforeach; ?>
						</div>

				</div><!--down--row--> 

			</div><!--down--wrapper-->

		</section><!--down-->

	</main><!-- #main -->

<?php

