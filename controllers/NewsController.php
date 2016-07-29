<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Site;



class NewsController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
}