<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?=$this->render('_head')?>
</head>
<body>
<?php $this->beginBody() ?>

    <?=$this->render('_header')?>

    <?= $content ?>

    <?=$this->render('_footer')?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
