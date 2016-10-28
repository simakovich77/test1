
    <?php echo CHtml::beginForm(); ?>
    <?php echo CHtml::errorSummary($model); ?>
    <?php foreach ($d as $index => $dat) :

        echo CHtml::activeTextField($model, $dat->text);

    endforeach;


    ?>

<?php echo CHtml::endForm(); ?>