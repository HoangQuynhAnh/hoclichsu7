<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $id
 * @property string $name
 * @property string $birthday
 * @property string $sex
 * @property int $user
 * @property string $email
 * @property string $address
 * @property string $sdt
 * @property string $sign
 * @property int $status
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user','name','fullname'],'required'],
            [['user'],'unique'],
            [['id', 'user', 'status'], 'integer'],
             ['user', 'unique', 'targetClass' => '\backend\models\User', 'message' => 'Tài khoản đã được tạo'],
            [['name', 'fullname','birthday', 'sex','password_hash','password_reset_token', 'email', 'address', 'sdt', 'sign','image'], 'string', 'max' => 255],
             [['auth_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên',
            'birthday' => 'Birthday',
            'sex' => 'Giới tính',
            'user' => 'Tài khoản',
            'email' => 'Email',
            'address' => 'Địa chỉ',
            'sdt' => 'SĐT',
            'sign' => 'Chữ ký',
            'status' => 'Trạng thái',
            'image' => 'Ảnh',
            'fullname'=>'Họ tên đệm',
            'password_reset_token' => 'Password Reset Token',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',

        ];
    }

    public function getDS_GiaoVien(){
          $danhSach= Yii::$app->db->createCommand('SELECT * from teacher ')->queryAll();
          return $danhSach;
    }
}
