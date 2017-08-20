<?php 
/**
 * Front page Hooks
 */

/**
 * Frontpage About Us & Bar Section One
 *
 * @add_action about_bar
 *
 * @return void
 */

function about_bar_section() {

	$args = array( 
		'post_type' => 'full-bar' 
	);

$full_bar=new WP_Query( $args );

global $post;

$post_id = $post->ID;

?>

<section class="two-column row no-pad container-fluid">

	<div class="col-sm-12">

		<div class="row">

			<div class="primary">

				<a id="about_section"><div class="col-sm-5"></a>

					<div class="about-img" style="background: url( '<?php the_field( 'bkg_img_about_us', $post_id ) ?>' ) 50%/cover no-repeat; height: 650px;">

						<h1><?php the_field( 'about_us_title', $post_id ); ?></h1>

						<p><?php the_field( 'about_us_content', $post_id ); ?></p>

					</div><!-- end about-img -->

				</div><!-- col-sm-5 -->

			</div><!-- end primary -->

			<div class="secondary">

				<div class="col-sm-7">

					<div class="bar-img" style="background: url( '<?php the_field( 'bkg_img_full_bar', $post_id ); ?>' ) 50%/cover no-repeat;">

					<h1><?php the_field( 'full_bar_title', $post_id ); ?></h1>

					<p><?php the_field( 'full_bar_content', $post_id ); ?></p>

				</div><!-- col-sm-7 -->

			</div><!-- end secondary -->

		</div><!-- end row -->

	</div><!-- end col-sm-12 -->

</section><!-- two-column row no-pad -->

<?php

}

add_action( 'about_bar', 'about_bar_section' );

/**
 * Frontpage Featured Items & Weekly Specials Section Two
 *
 * @add_action featured_specials
 *
 * @return void
 */

function featured_specials_section() {

?>

<?php

	$args = array( 
		'post_type'      => 'featured_items', 
		'orderby'        => 'rand', 
		'posts_per_page' =>'1' 
	);

$featured=new WP_Query( $args );

	$args = array(
		'post_type'     =>'specials', 
		'orderby'       =>'rand', 
		'posts_per_page'=>'1'
	);

$specials=new WP_Query( $args );

global $post;

$post_id = $post->ID;

?>

<section class="two-column row no-pad">

	<div class="col-sm-12">

		<div class="row">

			<div class="parallax" style="background-image: url( '<?php the_field( 'specials_featured-items_image', $post_id ); ?>' )">

				<h1>Featured Items &amp Weekly Specials</h1>

				<div class="featured-items">

					<div class="col-sm-6">

						<?php while ( $featured->have_posts() ) : $featured->the_post(); ?>

							<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

							<p><?php the_content(); ?></p>

						<?php endwhile; // end of the loop. ?>

					<?php wp_reset_postdata() ?>

					<?php get_post(); ?>

					</div><!-- end col-sm-6 -->

				</div><!-- end featured items -->

				<div class="specials">

					<div class="col-sm-6">

						<?php while ( $specials->have_posts() ) : $specials->the_post(); ?>

							<h3><?php the_title(); ?></h3>

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

							<p><?php the_content(); ?></p>

						<?php endwhile; // end of the loop. ?>

						<?php wp_reset_postdata() ?>

						<?php get_post(); ?>

					</div><!-- end col-sm-6 -->

				</div><!-- end speacials -->

			</div><!-- end parallax -->

		</div><!-- end row -->

	</div><!-- end col-md-12 -->

</section><!-- end two-column row no-max pad -->

<?php

} 
add_action( 'featured_specials', 'featured_specials_section' );

/**
 * Frontpage Giftcard, Carryout & Rewards Program Section Three
 *
 * @add_action gc_co_rp
 *
 * @return void
 */

function gc_co_rp_section() {

global $post;

$post_id = $post->ID;

?>

<section class="two-column row no-pad">

<div class="col-sm-12">

	<div class="row">

		<div class="parallax" style="background-image: url( '<?php the_field( 'bkg_img_reservation', $post_id ); ?>' )">

			<div class="row">

				<div class="primary-3">

					<div class="col-sm-4">

						<h1><?php the_field( 'giftcard_title', $post_id ); ?></h1>

						<p><?php the_field( 'gift_card_content', $post_id ); ?></p>

					</div><!-- end col-sm-4 --> 

				</div><!-- end primary 3 -->

				<div class="secondary-3">

					<div class="col-sm-4">

						<h1><?php the_field('carryout_title', $post_id ); ?></h1>

						<p><?php the_field('carryout_content', $post_id ); ?></p>

						<img src="<?php the_field( 'credit_card_image', $post_id ); ?>">

						<h5><?php the_field('sorry_no_checks', $post_id ); ?></h5>

					</div><!-- end col-sm-4 --> 

				</div><!-- end secondary 3 -->

				<div class="tertiary-3">

					<div class="col-sm-4">

						<h1><?php the_field('rewards_program_title', $post_id ); ?></h1>

						<p><?php the_field('rewards_program_content', $post_id ); ?></p>

					</div><!-- end col-sm-4 --> 

				</div><!-- end tertiary 3 -->

			</div><!-- end row -->

		<div class="button">

			<a href="tel:8163909550"<button type="button" class="btn btn-primary">CALL TO BOOK A TABLE</button></a>

		</div><!-- end button -->

	</div><!-- end row -->

</div><!-- end col-md-12 -->

</section><!-- end three-column row no-max pad -->

<?php

} 
add_action( 'gc_co_rp', 'gc_co_rp_section' );

/**
 * Frontpage Google Map & Location Section Four
 *
 * @add_action map_location
 *
 * @return void
 */

function map_location_section() {

global $post;

$post_id = $post->ID;

?>

<section class="two-column row no-pad">

	<div class="col-sm-12">

		<a id="map_section"><div class="row"></a>

			<div class="primary-2">

				<div class="col-sm-7">

					<?php the_field('map', $post_id ); ?>

				</div><!-- end col-sm-7 --> 

			</div><!-- end primary 2 -->

			<div class="secondary-2">

				<div class="col-sm-5">

					<div class="location" style="background: url( '<?php the_field( 'bkg_img_location', $post_id ); ?>' ) 50%/cover no-repeat; height: 400px;">

					<?php the_field( 'location_title', $post_id ); ?>

					<?php the_field('location_content', $post_id ); ?>

				</div><!-- end col-sm-5 --> 

			</div><!-- end secondary 2 -->

		</div><!-- end row -->

	</div><!-- end col-md-12 -->

</section><!-- end two-column row no-max pad -->

<?php

} 
add_action( 'map_location', 'map_location_section' );

/**
 * Frontpage Slider Section Five
 *
 * @add_action slider
 *
 * @return void
 */

function slider_section() {

global $post;

$post_id = $post->ID;

?>

<section class="one-column row no-pad">

	<div class="col-sm-12">

		<div class="row">

			<div class="slider">

				<?php the_field('slider_content', $post_id ); ?>

			</div><!-- end slider -->

		</div><!-- end row -->

	</div><!-- end col-sm-12 -->

</section><!-- one-column row no-pad -->

<?php

} 
add_action( 'slider', 'slider_section' );



