<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%selling_brands}}`.
 */
class m221119_150852_create_selling_brands_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%selling_brands}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'image' => $this->string(255)->null(),
            'link' => $this->string(255)->null(),
            'status' => $this->tinyInteger(2)->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%selling_brands}}');
    }
}
