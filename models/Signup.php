<?php

namespace app\models;


use yii\base\Model;

class Signup extends Model
{

    public $id;
    public $login;
    public $mail;
    public $password;
    public $role;
    public $uid;
    public $adress;
    public $status;
    public $date;

    public function rules()
    {
        return [
            ['mail', 'required', 'message'=>'E-mail не введен!'],
            ['password', 'required', 'message'=>'Пароль не введен!'],
            ['mail', 'email'],
            ['mail', 'unique', 'targetClass'=>'app\models\Users'],
            ['password', 'string', 'min'=>2, 'max'=>10]
        ];
    }

    public function signup()
    {
        $user = new Users();
        $user->mail = $this->mail;
        $user->setPassword($this->password);
        return $user->save();
    }

}