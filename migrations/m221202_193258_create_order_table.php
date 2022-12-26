<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m221202_193258_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'user' => $this->integer()->null(),
            'full_name' => $this->string(255)->notNull(),
            'address' => $this->string(255)->notNull(),
            'city' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'phone' => $this->string(255)->notNull(),
            'created_date' => $this->dateTime(),
            'updated_date' => $this->dateTime(),
            'total_product_count' => $this->integer(),
            'total_product_price' => $this->integer(),
            'status' => $this->tinyInteger(2)->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }
}
