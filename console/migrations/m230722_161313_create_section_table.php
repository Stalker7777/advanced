<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%section}}`.
 */
class m230722_161313_create_section_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%section}}', [
            'id' => $this->primaryKey(),
            'name_dir' => $this->string(255)->notNull(),
            'title_ru' => $this->string(255)->notNull(),
            'title_kz' => $this->string(255)->notNull(),
            'description_ru' => $this->string(255)->notNull(),
            'description_kz' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%section}}');
    }
}
