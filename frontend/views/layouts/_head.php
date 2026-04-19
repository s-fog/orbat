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
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
  (function(m,e,t,r,i,k,a){
    m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
  })(window, document,'script','https://mc.yandex.ru/metrika/tag.js', 'ym');

  ym(99253113, 'init', {webvisor:true, clickmap:true, referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/99253113" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

