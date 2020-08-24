<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.08.2020
 * Time: 8:28
 */

namespace app\controllers;

class HomeController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}