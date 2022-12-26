<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m221124_132832_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'image' => $this->string(255)->null(),
            'price' => $this->double(10)->notNull(),
            'old_price' => $this->double(10)->null(),
            'body' => $this->text()->null(),
            'category_id' => $this->integer()->notNull(),
            'brand_id' => $this->integer()->notNull(),
            'color_id' => $this->integer()->notNull(),
            'availability' => $this->tinyInteger(2)->defaultValue(1),
            'best_selling' => $this->tinyInteger(2)->defaultValue(1),
            'new' => $this->tinyInteger(2)->defaultValue(1),
            'sale' => $this->tinyInteger(2)->defaultValue(1),
            'hot_collection' => $this->tinyInteger(2)->defaultValue(1),
            'status' => $this->tinyInteger(2)->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
