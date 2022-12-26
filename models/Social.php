<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "social".
 *
 * @property int $id
 * @property string $icon_class
 * @property string $link
 * @property int|null $status
 */
class Social extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'social';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icon_class', 'link'], 'required'],
            [['status'], 'integer'],
            [['icon_class'], 'string', 'max' => 255],
            [['link'], 'string', 'max' => 455],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'icon_class' => 'Icon Class',
            'link' => 'Link',
            'status' => 'Status',
        ];
    }

    public static function getCount()
    {
        return self::find()->count();
    }
}
