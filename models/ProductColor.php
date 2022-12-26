<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_color".
 *
 * @property int $id
 * @property string $title
 * @property int|null $status
 */
class ProductColor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_color';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 255],
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
            'status' => 'Status',
        ];
    }

    public static function getCount()
    {
        return self::find()->count();
    }
}
