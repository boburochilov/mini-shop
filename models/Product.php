<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $title
 * @property string|null $image
 * @property float $price
 * @property float|null $old_price
 * @property string|null $body
 * @property int $category_id
 * @property int $brand_id
 * @property int $color_id
 * @property int|null $availability
 * @property int|null $best_selling
 * @property int|null $new
 * @property int|null $sale
 * @property int|null $hot_collection
 * @property int|null $status
 */
class Product extends \yii\db\ActiveRecord
{

    public $gallery = [];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'price', 'category_id', 'brand_id', 'color_id'], 'required'],
            [['price', 'old_price'], 'number'],
            [['body'], 'string'],
            [['category_id', 'brand_id', 'color_id', 'availability', 'best_selling', 'new', 'sale', 'hot_collection', 'status'], 'integer'],
            [['gallery'], 'safe'],
            [['title', 'image'], 'string', 'max' => 255],
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
            'price' => 'Price',
            'old_price' => 'Цена со скидкой (необязательно)',
            'body' => 'Body',
            'category_id' => 'Category ID',
            'brand_id' => 'Brand ID',
            'color_id' => 'Color ID',
            'availability' => 'Availability',
            'best_selling' => 'Best Selling',
            'new' => 'New',
            'sale' => 'Sale',
            'hot_collection' => 'Hot Collection',
            'status' => 'Status',
        ];
    }


    public static function getCount()
    {
        return self::find()->count();
    }
}
