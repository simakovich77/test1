<div>
    <b><?php echo CHtml::encode($data->getAttributeLabel('img'));?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->img),array('view', 'img'=>$data->img), array('target' => '_blank')); ?>
    <br />
</div>