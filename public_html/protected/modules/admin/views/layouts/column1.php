<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css"><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>


</head>
<body>
<!--header_______________________________________________________________________________________________________-->
<header class="header">
    <div class="page-header">
        <h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
    </div>
</header>
<!--end header___________________________________________________________________________________________________-->

<!--menu_________________________________________________________________________________________________________-->
<div class="col-md-3">


    <ul class="nav nav-pills nav-stacked">
        <li role="presentation"><a href=<?php echo Yii::app()->request->baseUrl; echo $this->createUrl('/admin/articles/articles'); ?>>Статьи</a></li>
        <li role="presentation"><a href="#">Features</a></li>
        <li role="presentation"><a href="#">Pages</a></li>
    </ul>

</div>
<!--end menu______________________________________________________________________________________________________-->

<!--content_______________________________________________________________________________________________________-->
<div class="col-md-9">
    <?php echo $content;?>
</div>
<!--end content____________________________________________________________________________________________________-->

</div>


<!--footer_______________________________________________________________________________________________________-->

<footer>
    <div class="col-lg-12 top2 bottom2">
        <div class="text-center">CopyRight &copy; <?php echo date('Y'); ?></div>
    </div>
</footer>


<!--end footer___________________________________________________________________________________________________-->
</body>
</html>