<?php 

namespace app\models;

use yii;
use yii\base\BaseObject;

class SmsJob extends BaseObject implements \yii\queue\JobInterface
// \yii\queue\JobInterface
{
    public $url;
    public $file;
    
    public function execute($queue)
    {
        $sql = yii::$app->db->createCommand()->insert('product',[
            
        ]);
    }
}