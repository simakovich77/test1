<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1><?php echo $client->title; ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <!-- Image Column -->
            <div class="col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <?php echo CHtml::image($client->img, $client->title); ?>
                    </div>
                </div>
            </div>
            <!-- End Image Column -->
            <!-- Project Info Column -->
            <div class="portfolio-item-description col-sm-6">
                <h3>Client Description</h3>
                <?php echo $client->description; ?>
            </div>
            <!-- End Project Info Column -->
            <a href="<?php echo $this->createUrl('client/index'); ?>">Показать остальных клиентов</a>
        </div>
    </div>
</div>