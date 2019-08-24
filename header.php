<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="author" content="Brian L. Peter Jr." />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	 crossorigin="anonymous" />

	<link href="https://fonts.googleapis.com/css?family=Oswald|Damion|Great+Vibes|Open+Sans:600|Roboto:300&display=swap" rel="stylesheet"
	/>

	<script src="https://kit.fontawesome.com/1a2230bd17.js"></script>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script>
		if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
			document.getElementById("technologies").style.display = "none";
		}
	</script>

	<!-- Spinner -->
	<script>
		$(function () {
			// waiting for the page to bo be fully loaded
			$(".spinner").fadeOut("slow", function () {
				// fading out preloader
				$(this).remove(); // removing it from the DOM
			});
		});
	</script>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

  <title><?php bloginfo('title'); ?> | <?php bloginfo('description'); ?></title>
  <?php wp_head(); ?>
</head>

<body>
	<div class="spinner"></div>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" id="mainNav">
		<div class="container">
			<a href="<?= home_url('/'); ?>">
				<img class="mr-3 d-none d-sm-block" src="<?= get_bloginfo('template_url').'/assets/imgs/PWD.png'; ?>" alt="Peter Web Development Logo" id="navbar-logo" />
			</a>
			<a class="navbar-brand" id="navbarBrand" href="<?= home_url('/'); ?>">
				Peter Web Development
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
			 aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
      </button>
      
      <?php
          wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarText',
            'menu_class'      => 'navbar-nav ml-5 justify-content-around w-75 mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ));
        ?>
				<ul class="navbar-text my-auto d-none d-lg-inline">
					<li class="nav-icon d-inline">
						<a href="<?= get_theme_mod('facebook_link','#'); ?>">
							<i class="fab fa-facebook-square"></i>
						</a>
					</li>
					<li class="nav-icon d-inline">
						<a href="<?= get_theme_mod('twitter_link','#'); ?>">
							<i class="fab fa-twitter-square"></i>
						</a>
					</li>
					<li class="nav-icon d-inline">
						<a href="<?= get_theme_mod('linkedin_link','#'); ?>">
							<i class="fab fa-linkedin"></i>
						</a>
					</li>
					<li class="nav-icon d-inline">
						<a href="<?= get_theme_mod('instagram_link','#'); ?>">
							<i class="fab fa-instagram"></i>
						</a>
					</li>
				</ul>
		</div>
	</nav>