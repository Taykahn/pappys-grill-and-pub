<section class="one-column row no-pad">

	<div class="col-sm-12">

		<div class="row">

			<div class="slick-slider">

				<?php $images = get_field('slider', 790 );

					if( $images ): ?>

						<div class="slider-for">

							<?php foreach( $images as $image ): ?>

							<?php endforeach; ?>

						</div>

						<div class="slider-nav">

								<?php foreach( $images as $image ): ?>

									<div>

										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

									</div>

								<?php endforeach; ?>

						</div>

					<?php endif; ?>

			</div><!-- .slider -->

		</div><!-- .row -->

	</div><!-- .col-sm-12 -->

</section><!-- .one-column .row .no-pad -->




<section class="one-column row no-pad">

	<div class="col-sm-12">

		<div class="row">

			<div class="slider">

				<?php the_field('content', 150 ); ?>

			</div><!-- end slider -->

		</div><!-- end row -->

	</div><!-- end col-sm-12 -->

</section><!-- one-column row no-pad -->