<?php
/**
 * Template Name: Front Page
 *
 * Front page action hooks in includes/front-page-hooks.php
 */

get_header() ?>

	<!-- Section One -->

	<?php do_action( 'about_bar' ); ?>

	<!-- Section Two -->

	<?php do_action( 'featured_specials' ); ?>

	<!-- Section Three -->

	<?php do_action( 'gc_co_rp' ); ?>

	<!-- Section Four -->

	<?php do_action( 'map_location' ); ?>

	<!-- Section Five -->

	<?php do_action( 'slider' ); ?>

<?php get_footer() ?>