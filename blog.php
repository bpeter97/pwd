<?php
/*
Template Name: Blog Home Page
*/
?>


<?php get_header(); ?>
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

	<section id="blogHomeHeader" class="">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <?php 

        $featured_query = new WP_Query('category_name=feature&showposts=3');

        if ( $featured_query->have_posts() ) : $featured_index = 0; while ( $featured_query->have_posts() ): $featured_query->the_post(); ?>
        
          <?php if ( $featured_index == 0 ) : ?>
          <div class="carousel-item active">
          <?php else : ?>
          <div class="carousel-item">
          <?php endif;
          get_template_part('template-parts/blog/featured-blog', $featured_query->get_post_format() );
          $featured_index++;

        endwhile; endif;
        ?>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  
  <section id="blogListings">
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-8">
          <?php get_template_part('template-parts/blog/blog-listings'); ?>
        </div>
        <div class="col-md-4">
          <?php get_template_part('template-parts/blog/sidebar'); ?>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/servers'); ?>

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