<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css"><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>

</head>
<body>
<div class="col-md-4">.col-md-4</div>
<div class="col-md-8">.col-md-8
    <?php echo $content;?>
</div>


</div>

</body>
</html>