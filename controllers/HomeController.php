<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.08.2020
 * Time: 8:28
 */

namespace app\controllers;

use app\models\Product;

class HomeController extends AppController
{
    public function actionIndex()
    {
        $offers = Product::find()->where(['is_offer' => 1])->limit(4)->orderBy('sort ASC')->asArray()->all();
        return $this->render('index',compact('offers'));
    }
}