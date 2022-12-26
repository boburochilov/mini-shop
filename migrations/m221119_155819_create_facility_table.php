<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%facility}}`.
 */
class m221119_155819_create_facility_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%facility}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'info' => $this->string(255)->notNull(),
            'image' => $this->string(255)->null(),
            'status' => $this->tinyInteger(2)->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%facility}}');
    }
}
