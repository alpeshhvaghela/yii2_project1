<?php 
namespace app\controllers;

use app\models\SmsJob;
use yii\web\Controller;
use yii;
class ProductController extends Controller {

    public function actionIndex(){
        
        return $this->render("index");
    }

    public function actionAdd(){
        
        return $this->render("add");
    }

    public function actionUrlmanager(){
                    // writer UrlManager in url url-manager
                    // write Urlmanager  in url urlmanager
        //$url = \Yii::$app->urlManagerMySite->createUrl(['product/items']);
        $url = \Yii::$app->urlManagerMySite->createUrl(['product/category','phone'=>'iphone']);
        $url1 = \Yii::$app->urlManagerMySite->createUrl(['product/category','phone'=>'nokia']);
        $url2 = \Yii::$app->urlManagerMySite->createUrl(['phone/detail','phone'=>'iphone']);
        $url3 = \Yii::$app->urlManagerMySite->createUrl(['phone/detail','phone'=>'mi','model'=>4]);
        echo $url.'<br/>'.$url1.'<br/>'.$url2.'<br/>'.$url3;
    }
}   
