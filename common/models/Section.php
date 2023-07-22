<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "section".
 *
 * @property int $id
 * @property string $name_dir
 * @property string $title_ru
 * @property string $title_kz
 * @property string $description_ru
 * @property string $description_kz
 *
 * @property Sections[] $sections
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_dir', 'title_ru', 'title_kz', 'description_ru', 'description_kz'], 'required'],
            [['name_dir', 'title_ru', 'title_kz', 'description_ru', 'description_kz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_dir' => 'Name Dir',
            'title_ru' => 'Title Ru',
            'title_kz' => 'Title Kz',
            'description_ru' => 'Description Ru',
            'description_kz' => 'Description Kz',
        ];
    }

    /**
     * Gets query for [[Sections]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSections()
    {
        return $this->hasMany(Sections::class, ['section_id' => 'id']);
    }
}
