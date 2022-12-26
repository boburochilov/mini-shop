<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property int $id
 * @property string $subtitle
 * @property string $definition
 * @property string $product_name
 * @property string|null $description
 * @property string|null $image
 * @property float $price
 * @property int|null $status
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subtitle', 'definition', 'product_name', 'price'], 'required'],
            [['price'], 'number'],
            [['status'], 'integer'],
            [['subtitle', 'definition', 'product_name', 'image'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 355],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subtitle' => 'Subtitle',
            'definition' => 'Definition',
            'product_name' => 'Product Name',
            'description' => 'Description',
            'image' => 'Image',
            'price' => 'Price',
            'status' => 'Status',
        ];
    }

    public static function getCount()
    {
        return self::find()->count();
    }
}
