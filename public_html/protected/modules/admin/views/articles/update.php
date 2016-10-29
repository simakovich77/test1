

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






</div>

<div class="form-group">
    <?php echo $form->labelEx($d, 'Содержимое статьи'); ?>
    <?php echo $form->textField($d,'text',array('size'=>255, 'maxlength'=>255, 'class' => 'form-control')); ?>
    <?php echo $form->error($d,'text'); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($d, 'Фото статьи'); ?>
    <?php echo CHtml::image(Yii::app()->request->baseUrl.$d->img,"img",array("width"=>200)); echo "<br>";?>
    <?php echo $form->error($d,'img'); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($d, 'Выбрать фото статьи'); ?>
    <?php echo CHtml::activeFileField($d, 'image'); ?>
    <?php echo $form->error($d,'img'); ?>
</div>

<div class="form-group">
    <?php echo $form->labelEx($d, 'Дата публикации'); ?>
    <?php echo $form->textField($d,'ndate',array('size'=>255, 'maxlength'=>255, 'class' => 'form-control')); ?>
    <?php echo $form->error($d,'ndate'); ?>
</div>

<div class="form-group">
    <?php echo CHtml::submitButton($d->isNewRecord ? 'Create' : 'Save', ['class' => 'btn btn-default']); ?>
</div>


<?php $this->endWidget(); ?>