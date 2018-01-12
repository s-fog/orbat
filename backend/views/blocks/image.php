<?php
use kartik\widgets\FileInput;
use yii\helpers\Html;

if ($image) {
    echo '
                                            <div class="form-group field-customcatalog-product_video has-success">
                                                <label class="control-label col-sm-3" for="customcatalog-product_video"></label>
                                                <div class="col-sm-6">
                                                    '.Html::img($image, ['width' => 250]).'
                                                </div>
                                            </div>
                    ';
}
echo $form->field($model, $name)->textInput();
echo $form->field($model, $name.'_file')->widget(FileInput::className(), [
    'pluginOptions' => [
        'showCaption' => false,
        'showRemove' => false,
        'showUpload' => false,
        'browseClass' => 'btn btn-primary btn-block',
        'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
        'browseLabel' =>  'Выберите изображение'
    ],
    'options' => ['accept' => 'image/*']
])->label(false);
?>