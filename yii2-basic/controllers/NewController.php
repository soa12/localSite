<?php

namespace app\controllers;

use yii\web\Controller;

class NewController extends Controller
{
    // ...существующий код...

    public function actionSay($message = 'Привет')
    {
        return $this->render('say', ['message' => $message]);
    }
}