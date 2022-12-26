<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $created_date
 * @property string|null $updated_date
 * @property int|null $product_id
 * @property string $body
 * @property int|null $status
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'body'], 'required'],
            [['created_date', 'updated_date'], 'safe'],
            [['product_id', 'status'], 'integer'],
            [['body'], 'string'],
            [['name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
            'product_id' => 'Product ID',
            'body' => 'Body',
            'status' => 'Status',
        ];
    }

    public static function getCount()
    {
        return self::find()->count();
    }

    public static function getOneCount($id)
    {
        return self::find()->where(['product_id' => $id])->count();
    }
}
