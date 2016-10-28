

<?php $form = $this->beginWidget('CActiveForm', array(
'id'=>'user-form',
'focus'=>array($d,'firstName'),
)); ?>



<div class="row">

    <?php echo $form->labelEx($d,'title'); ?>
    <?php echo $form->textField($d,'title',array('size'=>60,'maxlength'=>255)); ?>
    <?php echo $form->error($d,'title'); ?>

</div>


<?php $this->endWidget(); ?>