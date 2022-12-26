<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int|null $user
 * @property string $full_name
 * @property string $address
 * @property string $city
 * @property string $email
 * @property string $phone
 * @property string|null $created_date
 * @property string|null $updated_date
 * @property int|null $total_product_count
 * @property int|null $total_product_price
 * @property int|null $status
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'total_product_count', 'total_product_price', 'status'], 'integer'],
            [['full_name', 'address', 'city', 'email', 'phone'], 'required'],
            [['created_date', 'updated_date'], 'safe'],
            [['full_name', 'address', 'city', 'email', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'full_name' => 'Full Name',
            'address' => 'Address',
            'city' => 'City',
            'email' => 'Email',
            'phone' => 'Phone',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
            'total_product_count' => 'Total Product Count',
            'total_product_price' => 'Total Product Price',
            'status' => 'Status',
        ];
    }

    public static function getCount()
    {
        return self::find()->count();
    }
}
