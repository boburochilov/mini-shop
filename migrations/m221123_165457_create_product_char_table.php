<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_char}}`.
 */
class m221123_165457_create_product_char_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_char}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(10),
            'name' => $this->string(255),
            'value' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_char}}');
    }
}
