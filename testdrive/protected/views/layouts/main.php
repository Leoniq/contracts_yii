<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <title>Contracts (test work)</title>
    <?php Yii::app()->clientScript->registerCssFile(CHtml::asset(Yii::getPathOfAlias('ext.css').'/bootstrap.min.css')); ?>
    <?php Yii::app()->clientScript->registerCssFile(CHtml::asset(Yii::getPathOfAlias('ext.assets.css').'/style.css')); ?>
</head>
<body>

<div class="main-block">
    <?=$content;?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- script.js -->
<?php Yii::app()->clientScript->registerScriptFile(
        CHtml::asset(Yii::getPathOfAlias('ext.assets.js').'/script.js'), CClientScript::POS_END); ?>
</body>
</html>
