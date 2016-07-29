<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class Site extends ActiveRecord
{
    public static function tableName()
    {
        return 'tariff';
    }
    public static function getTariff()
    {
        $data = self::find()->all();
        return $data;
    }
}