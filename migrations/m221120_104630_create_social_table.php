<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%social}}`.
 */
class m221120_104630_create_social_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%social}}', [
            'id' => $this->primaryKey(),
            'icon_class' => $this->string(255)->notNull(),
            'link' => $this->string(455)->notNull(),
            'status' => $this->tinyInteger(2)->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%social}}');
    }
}
