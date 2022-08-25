<?php 
namespace app\controllers;

use yii\web\Controller;

class ProductController extends Controller {

    public function actionIndex(){
        
        return $this->render("index");
    }

    public function actionAdd(){
        
        return $this->render("add");
    }
}
