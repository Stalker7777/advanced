<?php

use yii\db\Migration;

/**
 * Class m230722_135221_insert_data_to_steps
 */
class m230722_135221_insert_data_to_steps extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%steps}}',array(
            'id' => 1,
            'step_id' => 1,
            'description_ru' => 'Зарегистрируйтесь и создайте профиль на странице акции',
            'description_kz' => 'Акция парақшасына тіркеліп, жеке профиліңізді ашыңыз',
        ));

        $this->insert('{{%steps}}',array(
            'id' => 2,
            'step_id' => 1,
            'description_ru' => 'Выполняйте задания каждый день и получайте сундуки с призами',
            'description_kz' => 'Күн сайын тапсырмаларды орындап, жүлдеге толған сандықтарды алыңыз',
        ));

        $this->insert('{{%steps}}',array(
            'id' => 3,
            'step_id' => 1,
            'description_ru' => 'Набирайте баллы и поднимайтесь в рейтинге. Чем выше рейтинг, тем больше вероятность выигрыша',
            'description_kz' => 'Ұпай жинап, рейтинг бойынша көтеріліңіз. Рейтинг неғұрлым жоғары болса, жеңіске жету мүмкіндігі соғұрлым артады.',
        ));

        $this->insert('{{%steps}}',array(
            'id' => 4,
            'step_id' => 1,
            'description_ru' => 'Получайте гарантированные призы и бонусы',
            'description_kz' => 'Кепілдендірілген жүлделер мен бонустарға қол жеткізіңіз',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%steps}}', ['step_id' => 1]);
    }

}
