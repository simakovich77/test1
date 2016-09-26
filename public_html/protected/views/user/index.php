
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
			<!-- Team Member -->
			<div class="col-md-4 col-sm-6">
				<div class="team-member">
					<!-- Team Member Photo -->
					<div class="team-member-image"><img src="img/team1.jpg" alt="Name Surname"></div>
					<div class="team-member-info">

					</div>
				</div>
			</div>
			<!-- End Team Member -->
			<div class="col-md-4 col-sm-6">
				<div class="team-member">
					<?php
					$this->widget('zii.widgets.CListView', array(
						'dataProvider' => $dataProvider,
						'itemView'=>'_user',   // refers to the partial view named '_post'
					));
					?>
				</div>
			</div>




		</div>
	</div>
</div>

