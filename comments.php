<?php 


function format_comment($comment, $args, $depth) {
    
  $GLOBALS['comment'] = $comment; ?>
  
    <style>
      .comment-author {
        font-family: "Oswald", sans-serif;
        font-size: 24px;
      }
      .comment-date {
        text-decoration: none;
        color: black;
        font-style: italic;
      }
      .comment-date:hover {
        text-decoration: none;
        color: #0056b3;
        transition: 0.4s;
      }
      .comment-text {
        font-size: 18px;
      }
      .paginate-text {
        padding-top: 2rem;
      }
      .paginate-text a {
        text-decoration: none;
        color: black;
        font-size: 24px;
      }
      .paginate-text a:hover {
        text-decoration: none;
        color: #0056b3;
        transition: 0.4s;
      }
      .comment-notes {
        text-align: center;
      }
    </style>

   <li <?php comment_class('list-group-item'); ?> id="li-comment-<?php comment_ID() ?>">
   
      <div class="container">
        <div class="row">
          <div class="col-sm-2 text-center" style="overflow: hidden;">
            <img src="<?= get_avatar_url(get_the_ID()); ?>" style="width: 100%; object-fit: cover;" alt="">
          </div>
          <div class="col-sm-10">
            <div class="row py-0 my-0">
              <p class="py-0 my-0 comment-author text-uppercase"><?php printf(__('%s'), get_comment_author_link()) ?></p>
              </div>
            <div class="row">
              <p><a class="comment-permalink comment-date" href="<?php echo htmlspecialchars ( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?></a></p>
            </div>
            <div class="row">
              <div class="px-0 col-sm-12">
                <?php if ($comment->comment_approved == '0') : ?>
                  <em><?php _e('Your comment is awaiting moderation.') ?></em><br />
                <?php endif; ?>
                
                <div class="comment-text">
                  <?php comment_text(); ?>
                </div>

                <div class="reply">
                  <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>   
<?php 
}

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area pt-3">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title text-center pb-3">
			<?php
				printf(
					/* translators: %s: The post title. */
					__( 'Share Your Thoughts', 'peterwebdev' )
				);
			?>
		</h2>
		<ul class="list-group list-group-flush commentlist">
      <?php	
        wp_list_comments(
          array(
            'type'      => 'comment',
            'callback'  => 'format_comment'
          )
        );	
      ?>
		</ul><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<div class="nav-previous text-center paginate-text"><?php previous_comments_link( __( 'Older Comments', 'peterwebdev' ) ); ?></div>
			<div class="nav-next text-center paginate-text"><?php next_comments_link( __( 'Newer Comments', 'peterwebdev' ) ); ?></div>
    </nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) :
			?>
		<p class="nocomments"><?php _e( 'Comments are closed.', 'peterwebdev' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>
  <hr />

  <?php 


  $args = array(
    'comment_field' => '<p class="comment-form-comment">' .
        '<textarea id="comment" class="form-control" name="comment" placeholder="Express your thoughts, idea or write a feedback by clicking here & start an awesome comment" cols="45" rows="8" aria-required="true"></textarea>' .
        '</p>',
    'fields' => apply_filters(
        'comment_form_default_fields', array(
            'author' =>'<p class="comment-form-author">' . '<input id="author" class="form-control" placeholder="Your Name * (Required)" name="author" type="text" value="' .
                esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
                '</p>',
            'email'  => '<p class="comment-form-email">' . '<input id="email" class="form-control" placeholder="your-real-email@example.com * (Required)" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . ' />'  . 
                '</p>'
        )
    ),
    'comment_notes_after' => '',
    'title_reply' => '<div class="crunchify-text text-center"> <h5>Please Post Your Comments & Reviews</h5></div>'
  );

  ?>

  <?php comment_form( $args ); ?>
  <style>
    .comment-form-cookies-consent {
      display: none;
    }
  </style>