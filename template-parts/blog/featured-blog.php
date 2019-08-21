<?php if ( has_post_thumbnail() ): ?>
  <?php $featured_image = get_the_post_thumbnail_url(the_ID()); ?>
<?php endif; ?>
<img src="<?= $featured_image ?>" alt="">
<div class="carousel-caption">
  <h1><?php the_title(); ?></h1>
  <p class="pb-0 mb-0"><?php the_date(); ?></p>
  <p class="pt-0 mt-0"><?php the_author(); ?></p>
  <?php the_content(); ?>
  <p><a class="btn btn-primary" href="#" role="button">Sign up today</a></p>
</div>