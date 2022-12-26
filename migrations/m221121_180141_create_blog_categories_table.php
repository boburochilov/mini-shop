<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog_categories}}`.
 */
class m221121_180141_create_blog_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%blog_categories}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'status' => $this->tinyInteger(2)->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%blog_categories}}');
    }
}
