<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

	<section id="headerSection" class="">
		<div class="container-fluid about">
			<div class="d-flex flex-row">
				<div class="col mx-auto my-auto pt-5 about" id="headerCol">
					<div class="container pt-5 text-left">
						<div class="row">
							<div class="col-12 col-lg-6">
								<span id="headerTopText" class="h1 text-uppercase">
                  About
                </span>
                <?php if( get_field('sub_heading') ): ?>
                  <p class="pt-2"><?php the_field('sub_heading'); ?></p>
                <?php endif; ?>
								<br />
								<button type="button" onclick="window.location.href = './contact.html';" class="btn btn-primary mt-2 header-button ml-0">
                  Contact Us
                </button>
							</div>
							<div class="col-12 col-lg-6 text-center">
                <?php if( get_field('video_url') ): ?>
                  <div class="embed-responsive embed-responsive-16by9">
									  <iframe class="embed-responsive" src="<?php the_field('video_url'); ?>" allowfullscreen></iframe>
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
							// get_template_part('template-parts/content-paragraph');
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
							<?php $bpimage = get_field('brian_peter_image'); ?>
    						<img src="<?php echo $bpimage['url']; ?>" alt="<?php echo $bpimage['alt']; ?>" class="team-member-image" />
								<!-- <img src="./img/brian.png" alt="Brian L. Peter Jr. (Owner)" class="team-member-image"> -->
							</div>
							<div class="team-member-text-outer">
								<div class="team-member-text-inner">
									<div class="team-member-text">
										<h3 class="team-member-name">Brian L. Peter Jr.</h3>
										<span class="team-member-title">Owner / Web Developer</span>
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
							<?php $chelsimage = get_field('chelsea_peter_image'); ?>
    						<img src="<?php echo $chelsimage['url']; ?>" alt="<?php echo $chelsimage['alt']; ?>" class="team-member-image" />
							</div>
							<div class="team-member-text-outer">
								<div class="team-member-text-inner">
									<div class="team-member-text">
										<h3 class="team-member-name">Chelsea C. Peter</h3>
										<span class="team-member-title">Co-Owner / Brand Ambassador</span>
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