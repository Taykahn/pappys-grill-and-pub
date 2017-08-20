<?php 
/**
 * Template Name: Specials Single Page
 */

get_header();

		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$args = array(
			'post_type'      => 'specials',
			'posts_per_page' => 10,
			'orderby'        => 'date',
			'paged'          => $paged
			);

	$specials = new WP_Query( $args );

	?>

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="featured-specials-banner  no-pad" style="background: url( '<?php echo esc_url( the_field( 'specials_bkgd_img', 'option' ) ); ?>' ) 50%/cover no-repeat; ">

					<h1>Weekly Specials</h1>

					<?php while ( $specials->have_posts() ) : $specials->the_post(); ?>

						<section class="col-md-6">

							<h2><?php the_title(); ?></h2>

							<div class="page-content">

								<p><?php the_field('text'); ?></p>

							</div><!-- end page-content -->

							<div class="price">

							<p><?php the_field('price'); ?></p>

							</div><!-- end price --> 

						</section><!-- end col-md-6 -->

						<section class="col-md-6">

							<div class="page-image">

								<?php the_post_thumbnail(); ?>

							<br>

							<?php wp_reset_postdata() ?>

							<?php get_post(); ?>

							</div><!-- end page-image -->

						</section><!-- end col-md-6 -->

					<?php endwhile; // end of the loop. ?>

				<div class="col-md-12 options border-bottom">

					<?php do_action( 'mbc_pagination' ) ?>

				</div>

			</div><!-- end col-md-12 -->

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>