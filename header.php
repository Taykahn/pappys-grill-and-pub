<!DOCTYPE html>

<html lang="en">

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

	<title>

		<?php wp_title( '|', true, 'right' ); ?>

		<?php bloginfo('name'); ?>

	</title>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Alegreya|Architects+Daughter|Shadows+Into+Light|Lato" rel="stylesheet">

	<?php wp_head() ?>

	<?php 

		global $post;
		global $mbc_img_path;
		$post_slug = isset( $post->post_name ) ? $post->post_name : null;
		$page_slug = 'page-'.$post_slug;
		$post_id   = 'post-id-'.$post->ID;
		$fouc      = 'fouc';
		$classes   = array( $page_slug, $post_id );

	?>

	</head>

		<body <?php body_class( $classes ) ?>>

			<nav class="navbar navbar-inverse navbar-fixed-top">

				<div class="container">

					<div class="navbar-header">

						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>

						</button><!-- .navbar-toggle -->

					</div><!-- .navbar-header -->

					<div id="navbar" class="navbar-collapse collapse">

						<?php 

							$args = array(

							'menu'          => 'header-menu',
							'menu_class'    => 'nav navbar-nav',
							'container'     => 'false'

							);

							wp_nav_menu( $args ); ?>

					</div><!-- .navbar-collapse -->

				</div><!-- .container -->

			</nav><!-- .navbar -->

	<header>

<?php global $post;

$post_id = $post->ID;

?>

		<div class="container-fluid no-pad">

			<?php if ( is_front_page() ) { ?>

				<div class="banner no-pad" style="background: url( '<?php the_field( 'header_background_image', $post_id ); ?>' ) 50%/cover no-repeat;">

				<div class="wrapper">

					<div itemscope itemtype="http://schema.org/Restaurant">

						<div class="banner-img">

							<div id="ratings" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
								<span itemprop="ratingValue">4.6</span> stars -
								based on <span itemprop="reviewCount">203</span> reviews
							</div>
							<h1 itemprop="name">Pappy's Grill & Pub</h1>
							<span itemprop="priceRange">$1.00-$22.99</span>
							<span itemprop="servesCuisine">Tenderloins</span>
							<span itemprop="servesCuisine">Burgers</span>
							<span itemprop="servesCuisine">Hot Wings</span>
							<span itemprop="servesCuisine">Salads</span>
							<span itemprop="servesCuisine">Sandwiches</span>

							<img itemprop="image" src="<?php echo esc_url( the_field( 'header_logo_image', $post_id ) ); ?> " itemprop="contentUrl">

						</div><!-- .banner-img -->

						<div class="hours"> 

							<meta itemprop="openingHours" content="Mo-Th 8:00am-9:00pm">
							<meta itemprop="openingHours" content="Fr-Sa 8:00am-9:30pm">

							<?php the_field('hours_of_operation', $post_id ); ?>

						</div> <!-- .hours -->

						<div class="address-phone">

							<div id=schema-address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
							<span itemprop="streetAddress">2501 MESSAINE ST.</span>
							<span itemprop="addressLocality">Saint Joseph</span>,
							<span itemprop="addressRegion">MO</span> <span itemprop="postalCode">64501</span>
							<span itemprop="telephone">(816) 390-9550</span>
							</div>

							<ul class="social-icon-1">

								<li><a href="#map_section"><img src="<?php the_field( 'header_map_image', $post_id ); ?>" alt="facebook logo" class="social-icon"></a></li>

								<li><a href="https://www.facebook.com/Pappys-Grill-Pub-245352765500666/"><img src="<?php the_field( 'header_facebook_image', $post_id ) ?>" alt="facebook logo" class="social-icon"></a></li>

								<li><a itemprop="telephone" href="tel:816-390-9550"><img src="<?php the_field( 'header_phone_image', $post_id ); ?>" alt="phone logo" class="social-icon"></a></li>

							</ul><!-- .social-icon -->

						</div><!-- .address-phone -->

					</div><!-- itemscope -->

				</div><!--.wrapper-->

			</div><!--.banner-->

			<?php } else { ?>

				<div class="banner-img">

					<img src="<?php echo esc_url( the_field( 'specials_featured_header', 'option' ) ); ?> ">

				</div><!-- .banner-img -->

			<?php } ?>

		</div><!-- .container -->

	</header><!-- .header -->

<main id="main" role="main">
