<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%banner}}`.
 */
class m221119_082204_create_banner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%banner}}', [
            'id' => $this->primaryKey(),
            'subtitle' => $this->string(255)->notNull(),
            'definition' => $this->string(255)->notNull(),
            'product_name' => $this->string(255)->notNull(),
            'description' => $this->string(355)->null(),
            'image' => $this->string(255)->null(),
            'price' => $this->double(10)->notNull(),
            'status' => $this->tinyInteger(2)->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%banner}}');
    }
}
