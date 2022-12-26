<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%hot_collection}}`.
 */
class m221120_163639_create_hot_collection_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%hot_collection}}', [
            'id' => $this->primaryKey(),
            'sub_title' => $this->string(255)->notNull(),
            'title' => $this->string(255)->notNull(),
            'sale' => $this->string(255)->notNull(),
            'image' => $this->string(255)->null(),
            'status' => $this->tinyInteger(2)->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%hot_collection}}');
    }
}
