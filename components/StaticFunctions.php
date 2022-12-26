<?php

namespace app\components;
use Yii;

class StaticFunctions
{
    public static function saveImage($tableName,$id,$image){
        $dir = "uploads/{$tableName}/$id/";
        if (!is_dir($dir)){
            mkdir($dir,0777,true);
        }
        $file = sha1(md5($image->baseName). rand(1,1000000)) . '.' . $image->extension;
        $image->saveAs($dir . $file);
        return $file;
    }

    public static function getImage($tableName,$id,$image){
        $file = Yii::getAlias('@webroot') . "/uploads/$tableName/$id/$image";
        if (is_file($file)){
            return Yii::$app->params['frontend'] . "/uploads/$tableName/$id/$image";
        }else{
            return "/admin-assets/no_photo.jpg";
        }
    }



    public static function deleteImage($tableName,$id,$image){
        $file = Yii::getAlias('@webroot') . "/uploads/$tableName/$id/$image";
        if (is_file($file)){
            unlink($file);
        }
    }

}