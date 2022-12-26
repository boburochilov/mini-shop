<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mega_sale".
 *
 * @property int $id
 * @property string $sub_title
 * @property string $title
 * @property string $sale
 * @property string|null $image
 * @property int|null $status
 */
class MegaSale extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mega_sale';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_title', 'title', 'sale'], 'required'],
            [['status'], 'integer'],
            [['sub_title', 'title', 'sale', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sub_title' => 'Sub Title',
            'title' => 'Title',
            'sale' => 'Sale',
            'image' => 'Image',
            'status' => 'Status',
        ];
    }

    public static function getCount()
    {
        return self::find()->count();
    }
}
