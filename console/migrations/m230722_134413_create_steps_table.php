<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%steps}}`.
 */
class m230722_134413_create_steps_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%steps}}', [
            'id' => $this->primaryKey(),
            'step_id' => $this->integer()->notNull(),
            'description_ru' => $this->string(255)->notNull(),
            'description_kz' => $this->string(255)->notNull(),
        ]);

        $this->createIndex(
            'idx-steps-step_id',
            '{{%steps}}',
            'step_id'
        );

        $this->addForeignKey(
            'fk-steps-step_id',
            '{{%steps}}',
            'step_id',
            '{{%step}}',
            'id',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-steps-step_id',
            '{{%steps}}'
        );

        $this->dropIndex(
            'idx-steps-step_id',
            '{{%steps}}'
        );

        $this->dropTable('{{%steps}}');
    }
}
