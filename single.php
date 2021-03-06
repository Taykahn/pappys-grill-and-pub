<?php
/**
 * single
 */

 get_header(); ?>

	<div class="container">

		<div class="row">

			<div class="col-md-9">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="page-header">

							<h1><?php the_title(); ?></h1>

						</div><!-- .page-header -->

						<a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>

						<?php the_post_thumbnail(); ?>

					<?php endwhile; else: ?>

					<div class="page-header">

						<h1>Oh no!</h1>

					</div><!-- .page-header -->

					<p>No content is appearing for this page!</p>

				<?php endif; ?>

			</div><!-- .col-md-9 -->

		</div><!-- .row -->

	</div><!-- .container -->

<?php get_footer(); ?>