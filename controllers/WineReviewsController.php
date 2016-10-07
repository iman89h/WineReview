<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;



class WineReviewsController extends Controller
{
    public function actionIndex()
    {
        $data['winesList']=$this->actionGetWinesList();
        return $this->render('index',$data);
    }
    public function actionView($id)
    {
        $data['id']=$id;
        $winesList=$this->actionGetWinesList();
        foreach ($winesList as $wine){
            if($id==$wine['id']){
                $data['wine_name']=$wine['wine_name'];
                $data['winery']=$wine['winery'];
                $data['type']=$wine['type'];
            }
        }
        return $this->render('view',$data);
    }

    public function  actionGetWinesList(){
        $winesList=[
            ['id'=>1,'wine_name'=>'Tintara','winery'=>'Hardys','type'=>'Shiraz'],
            ['id'=>2,'wine_name'=>'Western Front','winery'=>'St hallet','type'=>'Shiraz'],
            ['id'=>3,'wine_name'=>'Redoch','winery'=>'Redoch','type'=>'cabernet sauvignon']
        ];
        return $winesList;
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
            $data['age']="26";
            $data['city']="melbourne";
            return $this->render('hello',$data);
        }
    */
}
