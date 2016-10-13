<div class="container">


    
<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>    Список статей</h1>
            </div>
        </div>
    </div>
</div>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>'table-bordered',
));

?>



    </div>


