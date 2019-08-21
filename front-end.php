<?php
/*
Template Name: Front-End
*/
?>

<?php get_header(); ?>

	<section id="headerSection">
		<div class="container-fluid">
			<div class="d-flex flex-row">
				<div class="col mx-auto my-auto pt-5" id="headerCol">
					<img src="<?= get_bloginfo('template_url').'/assets/imgs/PWD.png';?>" alt="Peter Web Development Logo" id="headerPWDlogo" />
					<br />
					<span id="headerTopText" class="h1">
							<p class="mb-3">We don't just build websites....</p>
							<span class="text-uppercase" id="headerTopInnerText"
								>We
								<span
									class="txt-rotate"
									data-period="2000"
									data-rotate='[ "develop", "design", "optimize", "maintain", "host" ]'
								></span> websites that sell!
					</span>
					</span><br /><br /><br />
					<button href="./about" onclick="window.location.href = './about';" id="" type="button" class="btn btn-primary mt-3 text-uppercase header-button">
						Who We Are
					</button>
					<button href="#services" onclick="window.location.href = '#services';" id="" type="button" class="btn btn-primary mt-3 text-uppercase header-button">
						What We Do
					</button>
				</div>
			</div>
		</div>
	</section>

  <?php get_template_part('template-parts/tech-section'); ?>

  <?php get_template_part('template-parts/mission-statement'); ?>

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