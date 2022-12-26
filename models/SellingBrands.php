<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "selling_brands".
 *
 * @property int $id
 * @property string $title
 * @property string|null $image
 * @property string|null $link
 * @property int|null $status
 */
class SellingBrands extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'selling_brands';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['image', 'link','title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
            'link' => 'Link',
            'status' => 'Status',
        ];
    }

    public static function getCount()
    {
        return self::find()->count();
    }
}
