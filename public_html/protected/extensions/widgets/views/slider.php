

<!-- Homepage Slider -->

        <?php foreach ($t_slider as $index => $tt_slider) : ?>

			<!-- Slide 1 -->


			<li class="bg4">

				<!-- Slide Title -->
				<h2 class="title">



                   </h2>
				<!-- Slide Text -->
				<h3 class="subtitle"><?php echo $tt_slider["title"]; ?></h3>
				<!-- Slide Image -->
				<img class="slide-img" src=<?php echo Yii::app()->request->baseUrl; echo $tt_slider["slide-img"];?> alt="Slide 1" />
</li>

            <?php endforeach; ?>

