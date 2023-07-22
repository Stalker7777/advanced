<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "step".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_kz
 *
 * @property Steps[] $steps
 */
class Step extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'step';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_ru', 'title_kz'], 'required'],
            [['title_ru', 'title_kz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ru' => 'Title Ru',
            'title_kz' => 'Title Kz',
        ];
    }

    /**
     * Gets query for [[Steps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSteps()
    {
        return $this->hasMany(Steps::class, ['step_id' => 'id']);
    }
}
