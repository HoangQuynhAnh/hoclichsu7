<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property int $classid
 * @property int $sex
 * @property string $birthday
 * @property string $image
 * @property string $password_hash
 * @property string $user
 * @property int $status
 * @property string $auth_key
 * @property string $password_reset_token
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'classid', 'sex', 'status'], 'integer'],
            [['birthday', 'name', 'image', 'password_hash', 'user', 'password_reset_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
              //['classid', 'required'],
        ];
    }
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
     public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'classid' => 'Tên lớp',
            'sex' => 'Giới tính',
            'birthday' => 'Ngày sinh',
            'image' => 'Ảnh',
            'password_hash' => 'Password Hash',
            'user' => 'Tài khoản',
            'status' => 'Trạng thái',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'name'=>'Tên học sinh',
            'created_at'=>'Ngày tạo',
            'updated_at'=>'Ngày cập nhật',

        ];
    }

    /**
     * {@inheritdoc}
     */

}
