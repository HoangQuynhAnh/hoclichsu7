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
            [['name', 'fullname','birthday', 'sex', 'email', 'address', 'sdt', 'sign','image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
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

        ];
    }

    public function getDS_GiaoVien(){
          $danhSach= Yii::$app->db->createCommand('SELECT * from teacher ')->queryAll();
          return $danhSach;
    }
}
