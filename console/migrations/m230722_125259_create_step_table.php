<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%step}}`.
 */
class m230722_125259_create_step_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%step}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(255)->notNull(),
            'title_kz' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%step}}');
    }
}
