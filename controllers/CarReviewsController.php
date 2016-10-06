<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class CarReviewsController extends Controller
{
    public function actionIndex()
    {
        //echo "hello from Car review controller!!";
        return $this->render('hello');
    }
}
