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
						<?= get_theme_mod('content_management_statement_message', 'You run your business, we will run your website! Do you want a website, but do not want the hastle of making changes on your website yourself? Then this may be an option for you! We will change images, alter information, redesign pages, create new pages, all for $50.00 per hour. Check out what is all included in content management below!'); ?>
					</span>
			</div>
		</div>
	</div>
</section>

<section id="hostingFeatures">
  <div class="container pt-5 pb-4">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="feature-title">Content Management</h2>
        <h2 class="feature-title">$50.00 Per Hour</h2>
      </div>
    </div>
  </div>
  <div class="container pb-5">
    <div class="row text-left feature-box">
      <div class="col-sm-4 feature first">
        <i class="far fa-times-circle"></i>
        <span>Problem Solving</span>
      </div>
      <div class="col-sm-4 feature">
        <i class="fab fa-megaport"></i>
        <span>Design Planning</span>
      </div>
      <div class="col-sm-4 feature">
        <i class="fas fa-code"></i>
        <span>Coding Solutions</span>
      </div>
      <div class="col-sm-4 feature almost-last">
        <i class="far fa-edit"></i>
        <span>Small Adjustments</span>
      </div>
      <div class="col-sm-4 feature almost-last">
        <i class="fas fa-tags"></i>
        <span>Content Creation</span>
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
