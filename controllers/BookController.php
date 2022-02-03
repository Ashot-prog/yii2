<?php

namespace controllers;

use app\models\Book;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class BookController extends Controller
{
    /**
     * {@inheritdoc}
     */

    public function actionIndex()
    {
        return $this->render('index');
    }



}
