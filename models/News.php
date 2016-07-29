<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;


class News extends ActiveRecord
{
    public static function tableName()
    {
        return 'news';
    }

    public static function getAllNews()
    {

    }

    public static function getOneNew($id)
    {

    }
}