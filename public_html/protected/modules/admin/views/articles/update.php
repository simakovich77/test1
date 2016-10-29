

<?php
    /** @var News $d */
    /** @var CActiveForm $form */
    $form = $this->beginWidget('CActiveForm', array(
'id'=>'user-form',
)); ?>



<div class="form-group">
    <?php echo $form->labelEx($d, 'Заголовок статьи'); ?>
    <?php echo $form->textField($d,'title',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
    <?php echo $form->error($d,'title'); ?>
    <?php echo $form->labelEx($d, 'Содержимое статьи'); ?>
    <?php echo $form->textField($d,'text',array('size'=>255, 'maxlength'=>255, 'class' => 'form-control')); ?>
</div>

<div class="form-group">
    <?php echo CHtml::submitButton($d->isNewRecord ? 'Create' : 'Save', ['class' => 'btn btn-default']); ?>
</div>


<?php $this->endWidget(); ?>