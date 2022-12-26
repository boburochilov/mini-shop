<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog}}`.
 */
class m221121_160849_create_blog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%blog}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'image' => $this->string(255)->null(),
            'seen_count' => $this->integer()->notNull(),
            'created_date' => $this->string(255)->notNull(),
            'top_body' => $this->text()->null(),
            'quote' => $this->string(255)->notNull(),
            'main_body' => $this->text()->null(),
            'category_id' => $this->integer()->notNull(),
            'popular_post' => $this->tinyInteger(2)->defaultValue(1),
            'status' => $this->tinyInteger(2)->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%blog}}');
    }
}
