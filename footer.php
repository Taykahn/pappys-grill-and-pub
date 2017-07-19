<?php 
/**
 * Footer
 */ 
?>

</main>

<footer class="footer">

	<section class="three-column row no-pad">

		<div class="col-sm-12">

			<div class="row">

				<div class="col-sm-4">

				</div><!-- end col-sm-4 -->

				<div class="col-sm-4">

					<div class="copyright">

						<div class="pappys-logo">

							<img src="<?php the_field('hero', 600 ); ?>" alt="Pappys Logo">

							<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>

						</div><!-- end pappys-logo -->

					</div><!-- end copyright -->

				</div><!-- end col-sm-4 -->

				<div class="col-sm-4">

				</div><!-- end col-sm-4 -->

			</div><!-- end row -->

		</div><!-- end col-sm-12 -->

	</section><!-- end two-column -->

</footer>

	<?php wp_footer(); ?>

	<script type='text/javascript' src='http://marshalls-website.dev/wp-content/themes/marshalls-website/js/slick-init.js?ver=1.6.0'></script>

	</body>

</html>