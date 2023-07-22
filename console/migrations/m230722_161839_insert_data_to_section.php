<?php

use yii\db\Migration;

/**
 * Class m230722_161839_insert_data_to_section
 */
class m230722_161839_insert_data_to_section extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%section}}',array(
            'id' => 1,
            'name_dir' => 'chests',
            'title_ru' => 'Сундуки',
            'title_kz' => 'Сандықтар',
            'description_ru' => 'Чем выше место в рейтиге, тем выше шанс выиграть призы',
            'description_kz' => 'Рейтингтегі орын жоғары болған сайын жүлде ұтып алу мүмкіндігі де арта түседі.',
        ));

        $this->insert('{{%section}}',array(
            'id' => 2,
            'name_dir' => 'ether',
            'title_ru' => 'Призы в прямом эфире',
            'title_kz' => 'Тікелей эфирде ойнатылатын жүлделер',
            'description_ru' => 'Дата следующего розыгрыша: 23.07.2023',
            'description_kz' => 'Келесі ұтыс ойыны өтетін күн: 23.07.2023',
        ));

        $this->insert('{{%section}}',array(
            'id' => 3,
            'name_dir' => 'tournament',
            'title_ru' => 'Призы в турнире',
            'title_kz' => 'Турнирдегі жүлделер',
            'description_ru' => 'Дата следующего розыгрыша: 23.07.2023',
            'description_kz' => 'Келесі ұтыс ойыны өтетін күн: 23.07.2023',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%section}}', ['id' => 3]);
        $this->delete('{{%section}}', ['id' => 2]);
        $this->delete('{{%section}}', ['id' => 1]);
    }
}
