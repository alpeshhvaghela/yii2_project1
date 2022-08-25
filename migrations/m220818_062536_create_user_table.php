<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m220818_062536_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name'=> $this->string(),
            'email'=> $this->string(),
            'gender'=> $this->integer(),
            'language'=> $this->string(),
            'username'=> $this->string(),
            'password'=> $this->string(),
            'conform_password'=>$this->string(),


        ]);
    }

/**      * {@inheritdoc}
    */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
