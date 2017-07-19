<?php
/**
 * Template Name: Pappys Menu
 */

get_header();
 

	$args = array( 
		'post_type' => 'pappys_menu',
		'posts_per_page' =>'10'
	 );
	$pappys_menu = new WP_Query( $args );

?>

	<div class="container">

		<div class="row">

			<section class="three-column row no-max pad">

				<div class="col-md-12">

					<div class="row">

						<div class="lunch-dinner">

							<?php if( $pappys_menu->have_posts() ) : ?>

								<?php while( $pappys_menu->have_posts() ) : $pappys_menu->the_post(); ?>

									<h1><?php the_title(); ?></h1>

									<?php the_post_thumbnail(); ?>

								<?php endwhile; // end of the loop. ?>

							<?php endif; ?>

						</div><!-- end lunch-dinner -->

					</div><!-- end row -->

				</div><!-- end col-md-12 -->

			</section><!-- end three-column row no-max pad -->

		</div><!-- end row -->

	</div><!-- end container --> 

<?php get_footer(); ?>