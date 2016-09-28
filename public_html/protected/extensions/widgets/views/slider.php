

<!-- Homepage Slider -->
<div class="homepage-slider">
	<div id="sequence">
		<ul class="sequence-canvas">
			<!-- Slide 1 -->
			<li class="bg4">

				<!-- Slide Title -->
				<h2 class="title">
                    //echo $t_slider->title;
                    <?php foreach ($t_slider as $index => $tt_slider) : ?>
                    <?php echo $tt_slider["slide-img"];?>
                    <?php endforeach; ?>
                    ?></h2>
				<!-- Slide Text -->
				<h3 class="subtitle">It looks great on desktops, laptops, tablets and smartphones</h3>
				<!-- Slide Image -->
				<img class="slide-img" src=<?php echo Yii::app()->request->baseUrl; ?>"/img/homepage-slider/slide1.png" alt="Slide 1" />
</li>
<!-- End Slide 1 -->

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

