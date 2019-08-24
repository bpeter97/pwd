<?php get_header(); ?>

<?php

global $wp_query;
$total_results = $wp_query->found_posts;

?>
	<style>
		#headerSection .container-fluid {
			background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
				url(<?= get_theme_mod('contact_page_header_image', get_bloginfo('template_url').'/assets/imgs/headers/servers.jpg') ?>) repeat 0 0;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
  </style>

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

	<section id="blogListings" class="pt-5 mt-3">
    <div class="container pt-5">
        <div class="row">
          <div class="col-md-8">
            <?php 

            if( have_posts() ):

              while( have_posts() ): the_post();

                get_template_part('template-parts/blog/blog-listings', get_post_format());

            endwhile; endif;
            
            ?>

          </div>
          <div class="col-md-4">
            <?php get_template_part('template-parts/blog/sidebar'); ?>
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