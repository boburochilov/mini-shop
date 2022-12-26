<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banner_categories".
 *
 * @property int $id
 * @property string $title
 * @property string $sub_title
 * @property float $price
 * @property string|null $image
 * @property int|null $status
 */
class BannerCategories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banner_categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'sub_title', 'price'], 'required'],
            [['price'], 'number'],
            [['status'], 'integer'],
            [['title', 'sub_title', 'image'], 'string', 'max' => 255],
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
            'sub_title' => 'Sub Title',
            'price' => 'Price',
            'image' => 'Image',
            'status' => 'Status',
        ];
    }

    public static function getCount()
    {
        return self::find()->count();
    }
}
