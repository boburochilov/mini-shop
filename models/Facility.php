<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "facility".
 *
 * @property int $id
 * @property string $title
 * @property string $info
 * @property string|null $image
 * @property int|null $status
 */
class Facility extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'facility';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'info'], 'required'],
            [['status'], 'integer'],
            [['title', 'info', 'image'], 'string', 'max' => 255],
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
            'info' => 'Info',
            'image' => 'Image',
            'status' => 'Status',
        ];
    }

    public static function getCount()
    {
        return self::find()->count();
    }
}
