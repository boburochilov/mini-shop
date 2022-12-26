<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "haeder".
 *
 * @property int $id
 * @property string $title
 * @property string $link
 * @property int|null $status
 */
class Haeder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'haeder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'link'], 'required'],
            [['status'], 'integer'],
            [['title', 'link'], 'string', 'max' => 255],
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
            'link' => 'Link',
            'status' => 'Status',
        ];
    }
}
