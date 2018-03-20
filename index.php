<?php get_header(); ?>

<section class="row">

	<div class="small-12 columns text-center">

		<div class="leader">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_posts(); ?>

				<h1><?php the_title(); ?></h1>

				<p><?php the_content(); ?></p>

			<?php endwhile; else : ?>

				<p><?php _e( 'Sorry, no posts matched your criteria. index.php' ); ?></p>

			<?php endif ?>

		</div><!-- .leader -->

	</div><!-- .small-12 .columns .text-center -->

</section><!-- .row -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>