<?php

use yii\db\Migration;

class m160814_162016_users extends Migration
{
    public function up()
    {

        $this->createTable(
               'users', [
            'id' => $this->primaryKey(),
            'login' => $this->string(100),
            'mail' => $this->string(100),
            'password' => $this->string(255),
            'role' => $this->string(100),
            'uid' => $this->integer(),
            'adress' => $this->string(255),
            'status' => $this->integer(),
            'date' => $this->timestamp(),
            ]);
    }

    public function down()
    {
        $this->dropTable('users');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
