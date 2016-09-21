<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Clients</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <!-- Featured News -->
            <div class="col-sm-12 featured-news">
                <?php
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider' => $dataProvider,
                    'itemView'=>'_client',   // refers to the partial view named '_post'
                ));
                ?>
            </div>
            <!-- End Featured News -->
        </div>
    </div>
</div>

