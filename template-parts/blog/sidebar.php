<!-- Search Widget -->
<div class="card mb-4">
  <h5 class="card-header">Search</h5>
  <div class="card-body">
    <?php get_search_form(); ?>
  </div>
</div>

<?php if ( is_active_sidebar( 'blog_right_1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'blog_right_1' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>

<div class="card mb-4">
  <h5 class="card-header">Categories</h5>
  <div class="card-body">
    <?php

      $categories = get_categories( array(
          'orderby' => 'name',
          'order'   => 'ASC'
      ) );
      
    ?>

    <ul class="list-group list-group-flush">
        <?php foreach( $categories as $category ):
            $category_link = sprintf( 
              '<a href="%1$s" alt="%2$s">%3$s</a>',
              esc_url( home_url( '/search/?s=' ) . $category->name ),
              esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
              esc_html( $category->name )
          );

        ?>
      <li class="list-group-item">
        <?= sprintf( esc_html__( '%s', 'textdomain' ), $category_link ); ?>
      </li>
        <?php endforeach; ?>
    </ul>
  </div>
</div>

<!-- Side Widget -->
<div class="card mb-4">
  <h5 class="card-header">Follow us on Twitter!</h5>
  <div class="card-body">
  <a class="twitter-timeline" href="https://twitter.com/peterwebdevelo2?ref_src=twsrc%5Etfw">Tweets by PWD</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
  </div>
</div>