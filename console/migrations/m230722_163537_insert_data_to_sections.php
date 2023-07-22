<?php

use yii\db\Migration;

/**
 * Class m230722_163537_insert_data_to_sections
 */
class m230722_163537_insert_data_to_sections extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%sections}}',array(
            'id' => 1,
            'section_id' => 1,
            'image' => 'carusel_1',
            'title_ru' => 'Золотой сундук',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

        $this->insert('{{%sections}}',array(
            'id' => 2,
            'section_id' => 1,
            'image' => 'carusel_2',
            'title_ru' => '',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

        $this->insert('{{%sections}}',array(
            'id' => 3,
            'section_id' => 1,
            'image' => 'carusel_3',
            'title_ru' => '',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

        $this->insert('{{%sections}}',array(
            'id' => 4,
            'section_id' => 1,
            'image' => 'carusel_4',
            'title_ru' => '',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

        $this->insert('{{%sections}}',array(
            'id' => 5,
            'section_id' => 1,
            'image' => 'carusel_5',
            'title_ru' => '',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

        $this->insert('{{%sections}}',array(
            'id' => 6,
            'section_id' => 1,
            'image' => 'carusel_6',
            'title_ru' => '',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

        $this->insert('{{%sections}}',array(
            'id' => 7,
            'section_id' => 1,
            'image' => 'carusel_7',
            'title_ru' => '',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

        $this->insert('{{%sections}}',array(
            'id' => 8,
            'section_id' => 1,
            'image' => 'carusel_8',
            'title_ru' => '',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

        $this->insert('{{%sections}}',array(
            'id' => 9,
            'section_id' => 1,
            'image' => 'carusel_9',
            'title_ru' => '',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

        $this->insert('{{%sections}}',array(
            'id' => 10,
            'section_id' => 1,
            'image' => 'carusel_10',
            'title_ru' => '',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

        $this->insert('{{%sections}}',array(
            'id' => 11,
            'section_id' => 1,
            'image' => 'carusel_11',
            'title_ru' => '',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

        $this->insert('{{%sections}}',array(
            'id' => 12,
            'section_id' => 1,
            'image' => 'carusel_12',
            'title_ru' => '',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

        $this->insert('{{%sections}}',array(
            'id' => 13,
            'section_id' => 1,
            'image' => 'carusel_13',
            'title_ru' => '',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

        $this->insert('{{%sections}}',array(
            'id' => 14,
            'section_id' => 1,
            'image' => 'carusel_14',
            'title_ru' => '',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

        $this->insert('{{%sections}}',array(
            'id' => 15,
            'section_id' => 1,
            'image' => 'carusel_15',
            'title_ru' => '',
            'title_kz' => '',
            'description_ru' => '',
            'description_kz' => '',
        ));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%sections}}', ['section_id' => 1]);
    }
}
