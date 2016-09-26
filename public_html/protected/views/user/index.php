


<?php
$this->widget('zii.widgets.CListView', array(
	'dataProvider' => $dataProvider,
	'itemView'=>'_user',   // refers to the partial view named '_post'
));
?>