<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sections".
 *
 * @property int $id
 * @property int $section_id
 * @property string $image
 * @property string $title_ru
 * @property string $title_kz
 * @property string $description_ru
 * @property string $description_kz
 *
 * @property Section $section
 */
class Sections extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sections';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section_id', 'image', 'title_ru', 'title_kz', 'description_ru', 'description_kz'], 'required'],
            [['section_id'], 'integer'],
            [['image', 'title_ru', 'title_kz', 'description_ru', 'description_kz'], 'string', 'max' => 255],
            [['section_id'], 'exist', 'skipOnError' => true, 'targetClass' => Section::class, 'targetAttribute' => ['section_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'section_id' => 'Section ID',
            'image' => 'Image',
            'title_ru' => 'Title Ru',
            'title_kz' => 'Title Kz',
            'description_ru' => 'Description Ru',
            'description_kz' => 'Description Kz',
        ];
    }

    /**
     * Gets query for [[Section]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSection()
    {
        return $this->hasOne(Section::class, ['id' => 'section_id']);
    }
}
