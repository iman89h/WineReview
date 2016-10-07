<?php

namespace app\controllers;

class WineReviewsController extends \yii\web\Controller
{

    public function actionCreate()
    {
        $model = new app\models\WineReviews();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('cre', [
            'model' => $model,
        ]);
    }



    public function actionDisplay()
    {
        return $this->render('display');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

    public function actionView()
    {
        return $this->render('view');
    }

}
