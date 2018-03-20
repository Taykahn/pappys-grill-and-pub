<?php get_header(); ?>

	<div class="container">

		<div class="row">

			<div class="col-md-9">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="page-header">

							<h1><?php the_title(); ?></h1>

						</div><!-- .page-header -->

						<?php the_content(); ?>

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- .col-md-9 -->

		</div><!-- .row -->

	</div><!-- .container -->

<?php get_footer(); ?>
