<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sections}}`.
 */
class m230722_161323_create_sections_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sections}}', [
            'id' => $this->primaryKey(),
            'section_id' => $this->integer()->notNull(),
            'image' => $this->string(255)->notNull(),
            'title_ru' => $this->string(255)->notNull(),
            'title_kz' => $this->string(255)->notNull(),
            'description_ru' => $this->string(255)->notNull(),
            'description_kz' => $this->string(255)->notNull(),
        ]);

        $this->createIndex(
            'idx-sections-section_id',
            '{{%sections}}',
            'section_id'
        );

        $this->addForeignKey(
            'fk-sections-section_id',
            '{{%sections}}',
            'section_id',
            '{{%section}}',
            'id',
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-sections-section_id',
            '{{%sections}}'
        );

        $this->dropIndex(
            'idx-sections-section_id',
            '{{%sections}}'
        );

        $this->dropTable('{{%sections}}');
    }
}
