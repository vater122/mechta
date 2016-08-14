<?php

namespace app\models;


use yii\db\ActiveRecord;

class Users extends ActiveRecord
{

    public function setPassword($passwprd)
    {
        $this->password = sha1($passwprd);
    }
}