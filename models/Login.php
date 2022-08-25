<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "login".
 *
 * @property int $ID
 * @property string $f_name
 * @property string $m_name
 * @property string $l_name
 * @property int $desig
 * @property string $mo_no
 * @property int $dis
 * @property string $tal
 * @property int $gha
 * @property string $email
 * @property string $pass
 * @property bool $isdeleted
 * @property bool $isactive
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'login';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['f_name', 'm_name', 'l_name', 'desig', 'mo_no', 'dis', 'tal', 'gha', 'email', 'pass'], 'required'],
            [['desig', 'dis', 'gha'], 'integer'],
            [['isdeleted', 'isactive'], 'boolean'],
            [['f_name', 'l_name', 'email'], 'string', 'max' => 25],
            [['m_name'], 'string', 'max' => 5],
            [['mo_no'], 'string', 'max' => 10],
            [['tal'], 'string', 'max' => 15],
            [['pass'], 'string', 'max' => 8],
            ['profile_picture','file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'f_name' => 'First Name',
            'm_name' => 'Middle Name',
            'l_name' => 'Last Name',
            'desig' => 'Designation',
            'mo_no' => 'Mobile No',
            'dis' => 'District',
            'tal' => 'Taluka',
            'gha' => 'Ghatak',
            'email' => 'Email',
            'pass' => 'Password',
            'profile_picture'=>'Profile Picture',
            'isdeleted' => 'Isdeleted',
            'isactive' => 'Isactive',
        ];
    }

    public function search(){
        $dataProvder = new  ActiveDataProvider([
            'query'=> Login::find(),
            'pagination'=>[
                'PageSize' => 10,
            ]
        ]);
        return $dataProvder ;
       }
}
