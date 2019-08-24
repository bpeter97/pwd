<?php get_header(); ?>
  
  <?php while ( have_posts() ) :  the_post(); ?>

  <?php if ( has_post_thumbnail() ): ?>
  <?php $featured_image = get_the_post_thumbnail_url(); ?>
  <?php endif; ?>

  <style>
		#headerSection .container-fluid {
			background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
				url(<?= $featured_image ?>) repeat 0 0;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
  </style>

	<section id="headerSection" class="">
		<div class="container-fluid">
			<div class="d-flex flex-row">
				<div class="col mx-auto my-auto pt-5" id="headerCol">
					<div class="container pt-5 pb-5 text-left">
						<div class="row">
							<div class="col-12">
								<span id="headerTopText" class="text-uppercase single-page pb-2">
                  <?= the_title() ?>
                </span>
                <?php if ( has_excerpt() ): ?>
                <div class="single-post-excerpt">
                  <?php the_excerpt(); ?>
                </div>
                <?php endif; ?>
                <br />
                <i class="fas fa-user post_header_meta"></i>
                <span class="pr-1 post_header_meta"><?php the_author(); ?></span>
                <i class="fas fa-clock post_header_meta"></i>
                <span class="post_header_meta"><?php the_date(); ?></span>
                <p class="post_header_meta">
                  <i class="fas fa-comments"></i>
                  <?= comments_number() ?>
                </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  </section>

  <section id="theSinglePost">
  <div class="container pt-5">
      <div class="row">
        <div class="col-md-8">
          <?php the_content(); ?>
          <hr class="single-post-hr" />
          <?php
          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) {
            comments_template();
          }
          ?>
        </div>
        </div>
        <div class="col-md-4">
          <?php get_template_part('template-parts/blog/sidebar'); ?>
        </div>
      </div>
    </div>
  </section>
  
  <?php endwhile; ?>

	<section id="blogPost" class="pt-5 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
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