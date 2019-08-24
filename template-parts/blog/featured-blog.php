<?php if ( has_post_thumbnail() ): ?>
  <?php $featured_image = get_the_post_thumbnail_url(); ?>
<?php endif; ?>
<img src="<?= $featured_image ?>" alt="" class="bd-placeholder-img" style="">
<div class="carousel-caption">
  <h1><?php the_title(); ?></h1>
  <p class="pb-0 mb-0 d-none d-md-block"><?php the_date(); ?></p>
  <p class="pt-0 mt-0 d-none d-md-block"><?php the_author(); ?></p>
  <?php the_content(); ?>
  <p><a class="btn btn-primary" href="<?= get_permalink(); ?>" role="button">Check Out More</a></p>
</div>