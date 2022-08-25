<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][0] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute'=> 'id',
                    // change name of id with header
                    //'header'=>'Employee ID',

                    //change name of id with label
                    'label'=> 'Employee ID',
                    'visible'=>true,
                ],
            
            'name', 
            'age',
            'country',
            'gender',
            'language',
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action,$model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'id' => $model->id]);
            //      }
            // ],
            [
                    'class' => 'yii\grid\ActionColumn',
                    'headerOptions' => ['width'=>'120'],
                    'header'=>'Action',
                    'template'=>'{view} {update} {delete}',
                    
                    
            ],
               //
        ],
          'layout'=>'{summary}{pager}{items}' 
    ]); ?>


</div>
