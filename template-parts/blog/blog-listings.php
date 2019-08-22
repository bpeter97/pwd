<?php if ( has_post_thumbnail() ): ?>
  <?php $featured_image = get_the_post_thumbnail_url(); ?>
<?php endif; ?>
<div class="card left-card mb-4">
  <img class="card-img-top" src="<?= $featured_image ?>" alt="Card image cap">
  <div class="card-body pb-0">
    <div class="row">
      <div class="col-6 text-left">
        <span class="blog-tag">
          Featured
        </span>
        <span class="blog-tag">
          Programming
        </span>
        <span class="blog-tag">
          HTML
        </span>
      </div>
      <div class="col-6 text-right">
        <span class="sharables">
          <a href="#">
            <i class="fas fa-share-alt pr-1"></i>
            Share
          </a>
        </span>
        <span class="sharables">
          <i class="fas fa-heart"></i>
          03
        </span>
        <span class="sharables">
          <i class="fas fa-comments"></i>
          07
        </span>
      </div>
    </div>
    <div class="col-12 text-left pl-0 pt-2">
      <span class="blog-date font-italic"><?php the_date(); ?></span>
    </div>
  </div>
  <div class="card-body">
    <h2 class="card-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <a href="#" class="btn read-more text-uppercase mt-3">Read More &rarr;</a>
  </div>
</div>
