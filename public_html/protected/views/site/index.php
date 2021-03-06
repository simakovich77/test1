<!-- Homepage Slider -->
<div class="homepage-slider">
	<div id="sequence">
		<ul class="sequence-canvas">
			<?php

			$this->beginWidget('ext.widgets.SliderBase');
			$this->endWidget();

			?>
		</ul>

		<div class="sequence-pagination-wrapper">
			<ul class="sequence-pagination">
				<li>1</li>
				<li>2</li>
				<li>3</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Homepage Slider -->

<!-- Press Coverage -->
<div class="section">
	<div class="container">
		<div class="row">

			<?php foreach ($pressCoverage as $coverage) : ?>
				<div class="col-md-4 col-sm-6">
					<div class="in-press press-wired">
						<a href="#"><?php echo $coverage; ?></a>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
</div>
<!-- Press Coverage -->

<!-- Services -->
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="service-wrapper">
					<img src="img/service-icon/diamond.png" alt="Service 1">
					<h3>Aliquam in adipiscing</h3>
					<p>Praesent rhoncus mauris ac sollicitudin vehicula. Nam fringilla turpis turpis, at posuere turpis aliquet sit amet condimentum</p>
					<a href="#" class="btn">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="service-wrapper">
					<img src="img/service-icon/ruler.png" alt="Service 2">
					<h3>Curabitur mollis</h3>
					<p>Suspendisse eget libero mi. Fusce ligula orci, vulputate nec elit ultrices, ornare faucibus orci. Aenean lectus sapien, vehicula</p>
					<a href="#" class="btn">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="service-wrapper">
					<img src="img/service-icon/box.png" alt="Service 3">
					<h3>Vivamus mattis</h3>
					<p>Phasellus posuere et nisl ac commodo. Nulla facilisi. Sed tincidunt bibendum cursus. Aenean vulputate aliquam risus rutrum scelerisque</p>
					<a href="#" class="btn">Read more</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Services -->

<!-- Call to Action Bar -->
<div class="section section-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="calltoaction-wrapper">
					<h3>It's a free multipurpose Bootstrap 3 template!</h3> <a href="http://www.dragdropsite.com" class="btn btn-orange">Download here!</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Call to Action Bar -->

<!-- Testimonials -->
<div class="section">
	<div class="container">
		<h2>Testimonials</h2>
		<div class="row">
			<?php foreach ($p_user as $index => $user) : ?>
			<!-- Testimonial -->
			<div class="testimonial col-md-4 col-sm-6">
				<!-- Author Photo -->
				<div class="author-photo">
					<a href=<?php echo $this->createUrl('user/userprofile', ['id' => $user->id]); ?>><?php echo CHtml::image($user->img); ?> </a>
				</div>

				<div class="testimonial-bubble">


					<blockquote>
						<p class="quote">
							<?php echo($user->text);?> <br>

						</p>

						<cite class="author-info">
							- <?php echo($user->name); echo " "; echo($user->surname); ?> , <br><?php echo($user->company);?> at <a href="#"><?php echo( $user->name);?></a>

						</cite>
					</blockquote>

					<div class="sprite arrow-speech-bubble"></div>
				</div>
			</div>
			<?php endforeach; ?>
			<div class = "other_users">
			<a href="<?php echo $this->createUrl('user/index'); ?>">Показать остальных пользователей</a>
		</div>
	</div>
</div>
<!-- End Testimonials -->

<!-- Pricing Table -->
<div class="section">
	<div class="container">
		<h2>Pricing</h2>
		<div class="row">
			<!-- Pricing Plans Wrapper -->
			<div class="pricing-wrapper col-md-12">
				<!-- Pricing Plan -->
				<div class="pricing-plan">
					<!-- Pricing Plan Ribbon -->
					<div class="ribbon-wrapper">
						<div class="price-ribbon ribbon-red">Popular</div>
					</div>
					<h2 class="pricing-plan-title">Starter</h2>
					<p class="pricing-plan-price">FREE</p>
					<!-- Pricing Plan Features -->
					<ul class="pricing-plan-features">
						<li><strong>1</strong> user</li>
						<li><strong>Unlimited</strong> projects</li>
						<li><strong>2GB</strong> storage</li>
					</ul>
					<a href="index.html" class="btn">Order Now</a>
				</div>
				<!-- End Pricing Plan -->
				<div class="pricing-plan">
					<h2 class="pricing-plan-title">Advanced</h2>
					<p class="pricing-plan-price">$49<span>/mo</span></p>
					<ul class="pricing-plan-features">
						<li><strong>10</strong> users</li>
						<li><strong>Unlimited</strong> projects</li>
						<li><strong>20GB</strong> storage</li>
					</ul>
					<a href="index.html" class="btn">Order Now</a>
				</div>
				<!-- Promoted Pricing Plan -->
				<div class="pricing-plan pricing-plan-promote">
					<h2 class="pricing-plan-title">Premium</h2>
					<p class="pricing-plan-price">$99<span>/mo</span></p>
					<ul class="pricing-plan-features">
						<li><strong>Unlimited</strong> users</li>
						<li><strong>Unlimited</strong> projects</li>
						<li><strong>100GB</strong> storage</li>
					</ul>
					<a href="index.html" class="btn">Order Now</a>
				</div>
				<div class="pricing-plan">
					<!-- Pricing Plan Ribbon -->
					<div class="ribbon-wrapper">
						<div class="price-ribbon ribbon-green">New</div>
					</div>
					<h2 class="pricing-plan-title">Mega</h2>
					<p class="pricing-plan-price">$199<span>/mo</span></p>
					<ul class="pricing-plan-features">
						<li><strong>Unlimited</strong> users</li>
						<li><strong>Unlimited</strong> projects</li>
						<li><strong>100GB</strong> storage</li>
					</ul>
					<a href="index.html" class="btn">Order Now</a>
				</div>
			</div>
			<!-- End Pricing Plans Wrapper -->
		</div>
	</div>
</div>
<!-- End Pricing Table -->



<div class="container">
    <div class="row">
        <?php foreach ($pressCoverage as $coverage) : ?>
            <div class="col-md-4 col-sm-6">
                <div class="in-press press-wired">
					<?php echo $coverage; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- Our Clients -->
<div class="section">
	<div class="container">
		<h2>Our Clients</h2>
		<div class="clients-logo-wrapper text-center row">
            <?php foreach ($p_client as $index => $client) : ?>
				<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6">
					<?php echo CHtml::link(
						CHtml::image($client->img, $client->title),
						$this->createUrl('client/view', ['id' => $client->id])
					); ?>
				</div>
			<?php endforeach; ?>
			<a href="<?php echo $this->createUrl('client/index'); ?>">Показать остальных клиентов</a>
        </div>
	</div>
</div>
<!-- End Our Clients -->

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-footer col-md-3 col-xs-6">
					<h3>Our Latest Work</h3>
					<div class="portfolio-item">
						<div class="portfolio-image">
							<a href="page-portfolio-item.html"><img src=<?php echo Yii::app()->request->baseUrl; ?>"/img/portfolio6.jpg" alt="Project Name"></a>
						</div>
					</div>
				</div>
				<div class="col-footer col-md-3 col-xs-6">
					<h3>Navigate</h3>
					<ul class="no-list-style footer-navigate-section">
						<li><a href="page-blog-posts.html">Blog</a></li>
						<li><a href="page-portfolio-3-columns-2.html">Portfolio</a></li>
						<li><a href="page-products-3-columns.html">eShop</a></li>
						<li><a href="page-services-3-columns.html">Services</a></li>
						<li><a href="page-pricing.html">Pricing</a></li>
						<li><a href="page-faq.html">FAQ</a></li>
					</ul>
				</div>

				<div class="col-footer col-md-4 col-xs-6">
					<h3>Contacts</h3>
					<p class="contact-us-details">
						<b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
						<b>Phone:</b> +44 123 654321<br/>
						<b>Fax:</b> +44 123 654321<br/>
						<b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
					</p>
				</div>
				<div class="col-footer col-md-2 col-xs-6">
					<h3>Stay Connected</h3>
					<ul class="footer-stay-connected no-list-style">
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="googleplus"></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>