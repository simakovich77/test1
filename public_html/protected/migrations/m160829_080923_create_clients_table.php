<?php

class m160829_080923_create_clients_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('o_cient', array(
            'id' => 'int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'title' => 'VARCHAR(255)',
            'img'=>'VARCHAR(255)'
        ) , 'ENGINE=InnoDB CHARSET=utf8');
    }

    public function down()
    {
        dropTable('o_client');
        return false;
    }
}