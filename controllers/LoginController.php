<?Php

namespace app\controllers;

use app\models\Login;
use yii\web\Controller;
use yii\web\UploadedFile;

class LoginController extends Controller
{

    public function actionIndex()
    {
        $model = new Login();
        $dataProvider = $model->search();
        return $this->render("index",['dataProvider'=>$dataProvider]);
    }
 
    public function actionCreate()
    {
        $model = new Login();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                $model->profile_picture = UploadedFile::getInstance($model,'profile_picture');
                $filename = time().'.'.$model->profile_picture->extension;
                $model->profile_picture->saveAs('uploads/'.$filename);

                $model->save();
                return $this->redirect(['view', 'id' => $model->ID]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionView()
    {
    }
    public function actionUpdate()
    {
    }
    public function actionDelete()
    {
    }
}
