
	<div id="mainmenu">
		<?php //$this->widget('zii.widgets.CMenu',array(
			//'items'=>array(
			//	array('label'=>'Home', 'url'=>array('/site/index')),

			//	array('label'=>'Features', 'url'=>array('/site/page')),
			//	array('label'=>'Pages+', 'url'=>array('/site/contact')),
			//	array('label'=>'Credits', 'url'=>array('/site/login')),


				/*
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				*/
				//),
		//)); ?>
	</div><!-- mainmenu -->


	</div>

	<!-- header -->

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
