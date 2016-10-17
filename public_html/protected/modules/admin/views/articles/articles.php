

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

    <div class="tab1">
        <p>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>'table-bordered',
    'columns'=>array(
        'id::ID',
        'title::Title',
        array(
            'name' => 'img',
            'type' => 'image'),

        'text::Text',
        'ndate::Ndate',
        array(
            'class' => 'CButtonColumn',
        ),

    ),
));

?>
        </p>
    </div>


    </div>


