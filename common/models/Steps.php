<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "steps".
 *
 * @property int $id
 * @property int $step_id
 * @property string $description_ru
 * @property string $description_kz
 *
 * @property Step $step
 */
class Steps extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'steps';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['step_id', 'description_ru', 'description_kz'], 'required'],
            [['step_id'], 'integer'],
            [['description_ru', 'description_kz'], 'string', 'max' => 255],
            [['step_id'], 'exist', 'skipOnError' => true, 'targetClass' => Step::class, 'targetAttribute' => ['step_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'step_id' => 'Step ID',
            'description_ru' => 'Description Ru',
            'description_kz' => 'Description Kz',
        ];
    }

    /**
     * Gets query for [[Step]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStep()
    {
        return $this->hasOne(Step::class, ['id' => 'step_id']);
    }
}
