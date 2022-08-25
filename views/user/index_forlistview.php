<?php 
use yii\helpers\Html;
$this->title = "Alpesh&vagehela";

?>
<div class="user-index">

    <h1><?php echo Html::encode($this->title) ?></h1>

    <p>
        <?php echo Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

<?php


use yii\widgets\ListView;

        echo ListView::widget([
            'dataProvider'=> $dataProvider,
            'itemView'=>'list_view',
            'viewParams'=>[
                'testData'=> 'hello test data'
            ],
            // 'options'=>['class'=>'card card-body bg-light'],
            'itemOptions'=>['class'=>'card card-body bg-light']

        ]);

?>
