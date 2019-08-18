<section id="contact">
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col">
					<p class="text-center">
						<?= get_theme_mod('contact_form_message', 'Edit the "Contact Form Message" in the customizer.'); ?>
					</p>
					<div class="card">
						<div class="card-body">
							<?= do_shortcode(get_theme_mod('contact_form_shortcode', 'Edit the "Contact Form Shortcode" in the customizer.')); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>