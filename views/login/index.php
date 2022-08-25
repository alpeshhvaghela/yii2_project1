<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Login';
$this->params['breadcrumbs'][0] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Login', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


<?php

echo GridView::widget([
    
    'dataProvider'=> $dataProvider

]);
