<?php
namespace backend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class StudentForm extends Model
{
    public $user;
    public $password;
    public $status;
    public $name;
    public $classid;
    public $created_at;
    public $password_hash;



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['user', 'trim'],
            ['user', 'required'],
            ['classid', 'required'],
            ['name', 'required'],
            ['user', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Tài khoản đã được tạo'],
            ['user', 'string', 'min' => 2, 'max' => 255],
            ['password', 'string', 'min' => 6],
        ];
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
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function save()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new Student();
        $user->user = $this->user;
        $user->classid=$this->classid;
        $user->name = $this->name;
        $user->created_at=time();
        $user->status = $this->status;
        $user->setPassword($this->user);
        $user->password_hash=password_hash($this->user, PASSWORD_DEFAULT);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
