<?php
namespace frontend\models;

use yii\base\InvalidArgumentException;
use yii\base\Model;
use common\models\User;

/**
 * Password reset form
 */
class EditStudentForm extends Model
{
    public $password;
    public $status;
    public $name;
    public $classid;
    private $_user;


    public function rules()
    {
        return [
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['user', 'required'],
            ['user', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Tài khoản đã được tạo'],
            ['user', 'string', 'min' => 2, 'max' => 255],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Resets password.
     *
     * @return bool if password was reset.
     */
    public function editStudent()
    {

        $user = $this->_user;
        $user->user = $this->user;
        $user->status = $this->status;
        $user->classid=$this->classid;
        $user->setPassword($this->password);
        $user->removePasswordResetToken();
        return $user->save(false);
    }
}
