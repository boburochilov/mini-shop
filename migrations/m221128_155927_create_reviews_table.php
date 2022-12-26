<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reviews}}`.
 */
class m221128_155927_create_reviews_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%reviews}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'created_date' => $this->dateTime()->null(),
            'updated_date' => $this->dateTime()->null(),
            'product_id' => $this->integer()->null(),
            'body' => $this->text()->notNull(),//boldimi ha qildm
            'status' => $this->tinyInteger(2)->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%reviews}}');
    }
}
