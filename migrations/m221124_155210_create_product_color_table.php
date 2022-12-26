<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_color}}`.
 */
class m221124_155210_create_product_color_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_color}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'status' => $this->tinyInteger(2)->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_color}}');
    }
}
