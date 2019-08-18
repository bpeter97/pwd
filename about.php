<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>
	<style>
		#headerSection .container-fluid {
			background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
				url(<?= get_theme_mod('about_page_header_image', get_bloginfo('template_url').'/assets/imgs/headers/headerbg-min.jpg') ?>) repeat 0 0;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>

	<section id="headerSection" class="">
		<div class="container-fluid">
			<div class="d-flex flex-row">
				<div class="col mx-auto my-auto pt-5 about" id="headerCol">
					<div class="container pt-5 text-left">
						<div class="row">
							<div class="col-12 col-lg-6">
								<span id="headerTopText" class="h1 text-uppercase">
                  <?= get_theme_mod('about_page_header_title', 'About'); ?>
								</span>
								<p class="pt-2"><?= get_theme_mod('about_page_header_text', 'Edit the "About Page Header Text" in the customizer.'); ?></p>
								<br />
								<button type="button" onclick="window.location.href = './#contact';" class="btn btn-primary mt-2 header-button ml-0">
                  Contact Us
                </button>
							</div>
							<div class="col-12 col-lg-6 text-center">
                <?php if( get_field('video_url') ): ?>
                  <div class="embed-responsive embed-responsive-16by9">
									  <iframe class="embed-responsive" src="https://www.youtube.com/embed/<?= get_theme_mod('about_page_youtube_id', 'CCSGelSCPGE'); ?>" allowfullscreen></iframe>
								  </div>
                <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/tech-section'); ?>

	<section id="aboutUs" class="pt-5 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="text-muted text-uppercase pb-5">
						About Peter Web Development
					</h2>
					<?php 
						while ( have_posts() ):
							the_post();			
							the_content();
						endwhile;
					?>
					<!-- <p>
						Founded in 2019, Peter Web Development is a small web design, development, and hosting company based in Visalia, CA, USA.
						We are all about the customer. We focus on your wants and needs while providing our expertise to support your business
						growth. We offer a wide range of web design and development services, from creating mobile friendly solutions, responsive
						designs, custom e-commerce services, content management, website maintenance, website hosting, to search engine optimization.
						We strive to offer our customer every aspect they need for designing, developing, and hosting a website to avoid having
						to work with multiple companies to solve one problem.
					</p>
					<p>
						Our mission is to assist our clients in creating a professional digital footprint that supports business growth. We believe
						that businesses are built on relationships, great work, and measurable results. With that, our process was built with
						the client in mind. Not only do we offer services from registering domains, hosting, website design/development, and
						SEO optimization, but we also ensure that our client is informed in every part of our process.
					</p> -->
				</div>
			</div>
		</div>
	</section>

	<section id="cta-services">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center ">
					<a href="#services" class="btn btn-primary text-uppercase">
						Check out what we do
					</a>
				</div>
			</div>
		</div>
	</section>

	<section id="pictureSection">
		<div class="container">
			<div class="row pb-5">
				<div class="col-12 text-center">
					<h2 class="text-muted text-uppercase">
						The Team
					</h2>
					<hr>
				</div>
			</div>
			<div class="row justify-content-around">
				<div class="col-sm-12 col-lg-4 text-center">
					<div class="team team-member-style team-mask-circle team-member-zoom-rotate">
						<div class="team-layout">
							<div class="team-member-image-outer">
    						<img src="<?= get_theme_mod('about_page_team_brian_image', get_bloginfo('template_directory').'/assets/imgs/team/brian.png'); ?>" alt="<?= get_theme_mod('about_page_team_brian_image_alt', 'An Image'); ?>" class="team-member-image" />
							</div>
							<div class="team-member-text-outer">
								<div class="team-member-text-inner">
									<div class="team-member-text">
										<h3 class="team-member-name"><?= get_theme_mod('about_page_team_brian_name', 'Brian L. Peter Jr.'); ?></h3>
										<span class="team-member-title"><?= get_theme_mod('about_page_team_brian_title', 'Owner / Web Developer'); ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-lg-4 chelsea text-center">
					<article class="team team-member-style team-mask-circle team-member-zoom-rotate text-center">
						<div class="team-layout">
							<div class="team-member-image-outer">
								<img src="<?= get_theme_mod('about_page_team_chelsea_image', get_bloginfo('template_directory').'/assets/imgs/team/chelsea.png'); ?>" alt="<?= get_theme_mod('about_page_team_brian_image_alt', 'An Image'); ?>" class="team-member-image" />
							</div>
							<div class="team-member-text-outer">
								<div class="team-member-text-inner">
									<div class="team-member-text">
										<h3 class="team-member-name"><?= get_theme_mod('about_page_team_chelsea_name', 'Chelsea C. Peter'); ?></h3>
										<span class="team-member-title"><?= get_theme_mod('about_page_team_chelsea_name', 'Co-Owner / Consultant'); ?></span>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/services'); ?>

	<section id="letsBuild">
		<div class="container-fluid">
			<div class="d-flex flex-row justify-content-around">
				<h4>LETS BUILD SOMETHING TOGETHER</h4>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/contact-form'); ?>

	<?php get_template_part('template-parts/copyright'); ?>

  <?php get_footer(); ?>