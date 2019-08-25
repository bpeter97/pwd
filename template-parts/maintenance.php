<style>

  .feature {
    padding-left: 2rem;
    padding-top: 2rem;
  }
  .feature.almost-last {
    padding-bottom: 2rem;
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
				<span class="h5"><strong>
						<?= get_theme_mod('maintenance_statement_message', 'Maintenance  Statement Message: Edit this in the customizer.'); ?>
					</strong></span>
			</div>
		</div>
	</div>
</section>

<section id="hostingFeatures">
  <div class="container pt-5 pb-4">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="feature-title">Features Included in Website Maintenance</h2>
        <h2 class="feature-title">$50.00 Per Month</h2>
        <h4 class="feature-title">$540.00 Per Year (10% discount)</h4>
      </div>
    </div>
  </div>
  <div class="container pb-5">
    <div class="row text-left feature-box">
      <div class="col-sm-4 feature first">
        <i class="far fa-edit"></i>
        <span>Website Updates</span>
      </div>
      <div class="col-sm-4 feature">
        <i class="far fa-window-restore"></i>
        <span>Website Backups</span>
      </div>
      <div class="col-sm-4 feature">
        <i class="fab fa-wpforms"></i>
        <span>Test Forms</span>
      </div>
      <div class="col-sm-4 feature first">
        <i class="fas fa-columns"></i>
        <span>Test Pages</span>
      </div>
      <div class="col-sm-4 feature">
        <i class="fas fa-link"></i>
        <span>Test Links</span>
      </div>
      <div class="col-sm-4 feature">
        <i class="fas fa-spinner"></i>
        <span>Check Load Speeds</span>
      </div>
      <div class="col-sm-4 feature">
        <i class="fas fa-lock"></i>
        <span>Security Checks</span>
      </div>
      <div class="col-sm-4 feature">
        <i class="fas fa-chart-line"></i>
        <span>Uptime Monitoring</span>
      </div>
      <div class="col-sm-4 feature">
        <i class="far fa-trash-alt"></i>
        <span>Spam Removal</span>
      </div>
      <div class="col-sm-4 feature almost-last">
        <i class="far fa-images"></i>
        <span>Check Images</span>
      </div>
      <div class="col-sm-4 feature last">
        <i class="fas fa-tasks"></i>
        <span>Monthly Maintenance Report</span>
      </div>
      <div class="col-sm-12 text-center">
        <button type="button" onclick="window.location.href = './#contact';" class="btn btn-primary">
          Contact Us
        </button>
      </div>
    </div>
  </div>
</section>
