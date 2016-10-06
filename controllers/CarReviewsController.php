<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;



class CarReviewsController extends Controller
{
    public function actionIndex()
    {
        $data['carsList']=[
          ['id'=>1], ['id'=>2],
        ];
        //$count=0;
        foreach($data[carsList] as $car){
            echo "car";
        }
       // return $this->render('index');
    }



    /*
        public function actionIndex()
        {
            $data['name']="Iman";
            $data['age']="24";
            $data['city']="Tehran";
            return $this->render('hello',$data);
        }

        public function actionAnotherPage()
        {
            $this->layout="alt_layout";
            $data['name']="Iman";
            $data['age']="24";
            $data['city']="Tehran";
            return $this->render('hello',$data);
        }
    */
}
