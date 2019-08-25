<?php
/*
Template Name: Maintenance Page
*/
?>

<?php get_header(); ?>
	<style>
		#headerSection .container-fluid {
			background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
				url(<?= get_theme_mod('maintenance_page_header_image', get_bloginfo('template_url').'/assets/imgs/headers/servers.jpg') ?>) repeat 0 0;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>

	<section id="headerSection" class="">
		<div class="container-fluid">
			<div class="d-flex flex-row">
				<div class="col mx-auto my-auto pt-5 contact" id="headerCol">
					<div class="container pt-5 text-left">
						<div class="row">
							<div class="col-12 text-center">
								<span id="headerTopText" class="h1 text-uppercase">
                  <?= get_theme_mod('maintenance_page_header_title', 'Web Maintenance'); ?>
								</span>
								<p class="pt-2"><?= get_theme_mod('maintenance_page_message', 'Edit the "Maintenance Page Header Text" in the customizer.'); ?></p>
								<br />
								<button type="button" onclick="window.location.href = './#contact';" class="btn btn-primary mt-2 header-button ml-0">
                  Contact Us
                </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  
  <?php get_template_part('template-parts/maintenance'); ?>

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