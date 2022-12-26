<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%new_arrivals}}`.
 */
class m221120_162621_create_new_arrivals_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%new_arrivals}}', [
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
        $this->dropTable('{{%new_arrivals}}');
    }
}
