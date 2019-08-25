<style>

  .feature {
    padding-left: 2rem;
    padding-top: 2rem;
  }
  @media (min-width: 576px) {
    .feature.almost-last {
      padding-bottom: 2rem;
    }
  }
  .feature.last {
    padding-bottom: 2rem;
  }
  i {
    font-size: 1.5rem;
    padding-right: .5rem;
  }

</style>

<section id="missionStatement">
	<div class="container">
		<div class="d-flex flex-row">
			<div class="col text-center">
				<span class="h5">
						<?= get_theme_mod('custom_statement_message', 'We do not only do web development. We also develop web applications. This can be web portals, where your business conducts business online without your customers being able to see. This can be done through a number of different languages or different frameworks. If you are interested in something a little bit more than just a website, please contact us! Pricing is done on a project by project basis.'); ?>
					</span>
			</div>
		</div>
	</div>
</section>

<section id="hostingFeatures">
  <div class="container pt-5 pb-4">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="feature-title">Custom Development</h2>
        <h2 class="feature-title">Priced Per Project</h2>
      </div>
    </div>
  </div>
  <div class="container pb-5">
    <div class="row text-left feature-box">
      <div class="col-sm-4 feature first">
        <i class="fas fa-fire"></i>
        <span>PHP CodeIgniter</span>
      </div>
      <div class="col-sm-4 feature">
        <i class="fab fa-react"></i>
        <span>Express / React</span>
      </div>
      <div class="col-sm-4 feature">
        <i class="fab fa-laravel"></i>
        <span>Laravel</span>
      </div>
      <div class="col-sm-4 feature">
        <i class="fab fa-drupal"></i>
        <span>Drupal</span>
      </div>
      <div class="col-sm-4 feature">
        <i class="fab fa-joomla"></i>
        <span>Joomla</span>
      </div>
      <div class="col-sm-4 feature">
        <i class="fab fa-node-js"></i>
        <span>MERN Stack</span>
      </div>
      <div class="col-sm-4 feature almost-last">
        <i class="fab fa-js-square"></i>
        <span>JavaScript</span>
      </div>
      <div class="col-sm-4 feature almost-last">
        <i class="fab fa-php"></i>
        <span>PHP</span>
      </div>
      <div class="col-sm-4 feature last">
        <i class="far fa-plus-square"></i>
        <span>And More!</span>
      </div>
      <div class="col-sm-12 text-center">
        <button type="button" onclick="window.location.href = './#contact';" class="btn btn-primary">
          Contact Us
        </button>
      </div>
    </div>
  </div>
</section>
