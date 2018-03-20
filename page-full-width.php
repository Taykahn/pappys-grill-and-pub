<?php 
/** 
 * Template Name: Full Width Template
 */

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="page-header">

							<h1><?php the_title(); ?></h1>

						</div><!-- .page header -->

						<div class="wrapper3">

							<?php the_content(); ?>

						</div><!-- .wrapper3 -->

						<?php the_post_thumbnail(); ?>

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- .col-md-12 -->

		</div><!-- .row -->

	</div><!-- .ontainer -->

<?php get_footer(); ?>
