
<!-- Page Title -->
<div class="section section-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Our Team</h1>
			</div>
		</div>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
						<!-- End Team Member -->


					<?php
					$this->widget('zii.widgets.CListView', array(
						'dataProvider' => $dataProvider,
						'itemView'=>'_user',
						'itemsCssClass' => 'row',
						// refers to the partial view named '_post'
					));
					?>






		</div>
	</div>
</div>


