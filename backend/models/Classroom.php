<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "classroom".
 *
 * @property int $id
 * @property string $name
 * @property int $teacher_id
 * @property int $number_student
 */
class Classroom extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'classroom';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_id', 'number_student'], 'integer'],
            [['teacher_id', 'number_student', 'name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên lớp',
            'teacher_id' => 'Giáo viên',
            'number_student' => 'Số lượng học sinh',
        ];
    }
}
