<?php
namespace backend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class TeacherForm extends Model
{
    public $user;
    public $password;
    public $status;
    public $name;
    public $password_hash;
    public $birthday;
    public $sex;
    public $email;
    public $address;
    public $sdt;
    public $sign;
    public $fullname;
    public $admin;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['user', 'required'],
            ['name', 'required'],
            ['fullname', 'required'],
            ['status', 'required'],

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
            'name'=>'Tên',
            'fullname'=>'Họ tên đệm',

        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function saveform()
    {
        if (!$this->validate()) {
            return "invalidated";
        }
        
        $user = new Teacher();
       
        $user->name = $this->name;
        $user->status = $this->status;
        $user->user = $this->user;
        $user->fullname= $this->fullname;
        $user->birthday=$this->birthday;
        $user->sex= $this->sex;
        $user->email= $this->email;
        $user->address= $this->address;
        $user->sdt= $this->sdt;
        $user->sign= $this->sign;
        $user->setPassword($this->user);
        $user->password_hash=password_hash($this->user, PASSWORD_DEFAULT);
        $user->generateAuthKey();
      



          
      return $user->save() ? $user : null;
    }
}
