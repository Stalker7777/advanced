<?php

use yii\db\Migration;

/**
 * Class m230722_125505_insert_data_to_step
 */
class m230722_125505_insert_data_to_step extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%step}}',array(
            'id' => 1,
            'title_ru' => 'Как принять учаcтие',
            'title_kz' => 'қалай қатысуға болады',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%step}}', ['id' => 1]);
    }
}
