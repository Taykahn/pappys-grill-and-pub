<?php 
/**
 * Template Name: Featured Items 
 */

get_header();

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
	'post_type'      => 'featured_items',
	'posts_per_page' => 10,
	'orderby'        => 'date',
	'paged'          => $paged
	);

$featured = new WP_Query( $args );

?>



	<div class="container">

		<div class="col-md-12">

			<div class="featured-specials-banner no-pad" style="background: url( '<?php the_field( 'featured_items_bkgd_img', 'option' ); ?>' ) 50%/cover no-repeat; ">

			<h1>Featured Items</h1>

			<?php while ( $featured->have_posts() ) : $featured->the_post(); ?>

				<section class="col-md-6">

					<h2><?php the_field('title'); ?></h2>

					<div class="page-content">

						<p><?php the_field('content'); ?></p>

					</div><!-- .page-content -->

					<div class="price">

						<p><?php the_field('price'); ?></p>

					</div><!-- .price --> 

				</section><!-- .col-md-6 -->

				<section class="col-md-6">

					<div class="page-image">

						<?php the_post_thumbnail(); ?>

					<br>

					</div><!-- .page-image -->

				</section><!-- .col-md-6 -->

			<?php endwhile; // end of the loop.?>

			<div class="col-md-12 options border-bottom">

				<?php do_action( 'mbc_pagination' ) ?>

			</div>

			<?php wp_reset_postdata() ?>

			<?php get_post(); ?>

		</div><!-- .col-md-12 -->

	</div><!-- .container -->

<?php get_footer(); ?>