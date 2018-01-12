<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\imagine\Image;
use yii\web\UploadedFile;

/**
 * This is the model class for table "order".
 */
class UploadFile extends Model
{
    public static function upload($model, $attribute, $attributeFile, $thumbs = array(), $watermark = false) {
        /*echo '<pre>',print_r($_POST),'</pre>';
        echo '<pre>',print_r($_FILES),'</pre>';die();*/
        $file = UploadedFile::getInstance($model, $attributeFile);
        $result = '';

        $modelClassName = str_replace('\\', '/', $model->className());
        preg_match("#[a-zA-z]+/[a-zA-z]+/([a-zA-z]+)$#siU", $modelClassName, $match);
        $className = $match[1];

        if ($file) {
            $filename = '/uploads/'.$file->baseName.time().'.'.$file->extension;

            if (file_exists(Yii::getAlias('@www') . $filename)) {
                sleep(1);
            }

            if ($file->saveAs(Yii::getAlias('@www').$filename)) {
                $result = $filename;

                foreach($thumbs as $thumb) {
                    UploadFile::doThumb($filename, $thumb, $watermark);
                }
            } else {
                $result = false;
            }
        } else {
            $result = false;
        }


        if (!empty($_FILES[$className]['name'][$attributeFile])) {
            if ($result) {
                return $result;
            }
        } else {
            return $_POST[$className][$attribute];
        }
    }

    public static function doThumb($image, $thumb, $watermark) {
        $filename = explode('.', basename($image));
        $thumbCut = explode('x', $thumb);

        $thumbPath = '/images/thumbs/'.$filename[0].'-'.$thumbCut[0].'-'.$thumbCut[1].'.'.$filename[1];

        if (!file_exists(Yii::getAlias('@www') . $thumbPath)) {
            Image::thumbnail('@www' . $image, $thumbCut[0], $thumbCut[1])
                ->save(Yii::getAlias('@www'.$thumbPath), ['quality' => 80]);
        }
    }
}
