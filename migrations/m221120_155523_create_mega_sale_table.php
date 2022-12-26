<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mega_sale}}`.
 */
class m221120_155523_create_mega_sale_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mega_sale}}', [
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
        $this->dropTable('{{%mega_sale}}');
    }
}
