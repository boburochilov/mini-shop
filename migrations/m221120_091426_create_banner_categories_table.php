<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%banner_categories}}`.
 */
class m221120_091426_create_banner_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%banner_categories}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'sub_title' => $this->string(255)->notNull(),
            'price' => $this->double(10)->notNull(),
            'image' => $this->string(255)->null(),
            'status' => $this->tinyInteger(2)->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%banner_categories}}');
    }
}
