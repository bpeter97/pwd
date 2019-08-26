<?php

$home = home_url('/');
$hosting = $home . 'web-hosting/';
$design = $home . 'web-design/';
$maintenance = $home . 'web-maintenance/';
$seo = $home . 'search-engine-optimization/';
$content_management = $home . 'content-management/';
$custom = $home . 'custom-web-development/';
$ecommerce = $home . 'e-commerce-web-development/';
$emergency = $home . 'emergency-development/';

?>

<section id="copyright">
		<div class="container pt-5">
			<div class="row" id="footerRow">
				<div class="col-sm-3 col-12">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title text-center">Links</h5>
							<ul class="list">
								<li class="list-item"><a href="<?= home_url('/').'about'; ?>">About</a></li>
								<li class="list-item"><a href="<?= home_url('/').'contact'; ?>">Contact</a></li>
								<li class="list-item"><a href="<?= home_url('/').'blog'; ?>">Blog</a></li>
								<li class="list-item"><a href="./#services">Services</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-12">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title text-center">Social Media</h5>
							<ul class="list">
								<li class="list-item"><a href="<?= get_theme_mod('facebook_link','#'); ?>">Facebook</a></li>
								<li class="list-item"><a href="<?= get_theme_mod('twitter_link','#'); ?>">Twitter</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-12">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title text-center">Services</h5>
							<ul class="list">
								<li class="list-item"><a href="<?= $hosting; ?>">Web Hosting</a></li>
								<li class="list-item"><a href="<?= $design; ?>">Website Design</a></li>
								<li class="list-item"><a href="<?= $maintenance; ?>">Website Maintenance</a></li>
								<li class="list-item"><a href="<?= $seo; ?>">Search Engine Optimization</a></li>
								<li class="list-item"><a href="<?= $content_management; ?>">Content Management</a></li>
								<li class="list-item"><a href="<?= $custom; ?>">Custom Web Development</a></li>
								<li class="list-item"><a href="<?= $ecommerce; ?>">E-Commerce</a></li>
								<li class="list-item"><a href="<?= $emergency; ?>">Emergency Help</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-12">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title text-center">Peter Web Development</h5>
							<ul class="list">
								<!-- <li class="list-item">Some PO Box?</li> -->
								<li class="list-item">Visalia, C.A., U.S.A.</li>
								<li class="list-item">Phone: 555-555-5555</li>
								<li class="list-item"><a href="mailto:admin@peterwebdevelopment.com">Email Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p class="text-center">All Rights Reserved 2019 | Peter Web Development - A web hosting, design, and development company.</p>
				</div>
			</div>
		</div>
	</section>