<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $title
 * @property string|null $image
 * @property int $seen_count
 * @property string $created_date
 * @property string|null $top_body
 * @property string $quote
 * @property string|null $main_body
 * @property int $category_id
 * @property int|null $popular_post
 * @property int|null $status
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'seen_count', 'created_date', 'quote', 'category_id'], 'required'],
            [['seen_count', 'category_id', 'popular_post', 'status'], 'integer'],
            [['top_body', 'main_body'], 'string'],
            [['title', 'image', 'created_date', 'quote'], 'string', 'max' => 255],
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
            'seen_count' => 'Seen Count',
            'created_date' => 'Created Date',
            'top_body' => 'Top Body',
            'quote' => 'Quote',
            'main_body' => 'Main Body',
            'category_id' => 'Category ID',
            'popular_post' => 'Popular Post',
            'status' => 'Status',
        ];
    }

    public static function getCount()
    {
        return self::find()->count();
    }

    public static function getOneCount($id)
    {
        return self::find()->where(['category_id' => $id])->count();
    }
}
