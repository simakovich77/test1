<?php
$this->beginWidget('extensions/widgets/SliderBase',array(
	'params'=>array(
		//получаем текущее действие чтобы подсветить активный элемент меню

	)));
$this->endWidget();
?>



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