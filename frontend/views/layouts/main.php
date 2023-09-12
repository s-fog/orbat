<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;

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
