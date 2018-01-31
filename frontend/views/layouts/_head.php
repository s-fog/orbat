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
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47517898 = new Ya.Metrika2({
                    id:47517898,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47517898" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
