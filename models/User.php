<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property int $age
 * @property string $country
 * @property string $gender
 * @property string $language
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name','age', 'country', 'gender', 'language'], 'required'],
            //['name','required','message'=>'User name must be filled'],
            [['age'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['country', 'language'], 'string', 'max' => 100],
            [['gender'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
            'country' => 'Country',
            'gender' => 'Gender',
            'language' => 'Language',
        ];
    }
}
