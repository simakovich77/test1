<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">


	<link rel="stylesheet" type="text/css" href=<?php echo Yii::app()->request->baseUrl; ?>"/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href=<?php echo Yii::app()->request->baseUrl; ?>"/css/icomoon-social.css">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href=<?php echo Yii::app()->request->baseUrl; ?>"/css/leaflet.css" />
	<!--[if lte IE 8]>
	<link rel="stylesheet" type="text/css" href=<?php echo Yii::app()->request->baseUrl; ?>"/css/leaflet.ie.css" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href=<?php echo Yii::app()->request->baseUrl; ?>"/css/main.css">

	<title>Мое приложение<?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta>Мое приложение<?php echo $this->myVar; ?></meta>
	
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo">
			<?php
			echo CHtml::image('img/mPurpose-logo.png');
			?>
			</div>


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
