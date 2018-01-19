<?php

use yii\helpers\Html;

?>
<meta charset="<?=Yii::$app->charset ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<meta name="viewport" content="width=device-width">
<?= Html::csrfMetaTags() ?>
<title><?=(isset($this->params['seo_title']) && !empty($this->params['seo_title']))? $this->params['seo_title'] : $this->params['name'].' | Orbat'?></title>
<?=(isset($this->params['seo_description']) && !empty($this->params['seo_description']))? '<meta name="description" content="'.$this->params['seo_description'].'">' : ''?>
<?=(isset($this->params['seo_keywords']) && !empty($this->params['seo_keywords']))? '<meta name="keywords" content="'.$this->params['seo_keywords'].'">' : ''?>
<?php $this->head() ?>