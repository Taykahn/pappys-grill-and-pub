<?php
/**
 * Template Name: Pappys Breakfast
 */

get_header();

	$args = array( 'post_type' => 'pappys_breakfast' );
	$query = new WP_Query( $args );

?>

	<div class="container">

		<div class="row">

			<section class="three-column row no-max pad">

				<div class="col-md-12">

					<div class="menu">

						<?php if( $query->have_posts() ) : ?>

							<?php while( $query->have_posts() ) : $query->the_post(); ?>

								<h1><?php the_title(); ?></h1>

								<?php the_post_thumbnail(); ?>

							<?php endwhile; // end of the loop. ?>

						<?php endif; ?>

					</div><!-- end menu -->

				</div><!-- end col-md-12 -->

			</section><!-- end three-column row no-max pad -->

		</div><!-- end row -->

	</div><!-- end container --> 

<?php get_footer(); ?>