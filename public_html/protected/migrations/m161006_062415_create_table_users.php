<?php

class m161006_062415_create_table_users extends CDbMigration
{
	public function up()
	{
		$this->createTable('o_users', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY',
			'username' => 'VARCHAR(255)',
			'password' => 'VARCHAR(255)',
			'created'=>' int(11)',
			'ban' => 'int(11)',
			'role' => 'int(11)',

		) , 'ENGINE=InnoDB CHARSET=utf8');
	}

	public function down()
	{
		echo "m161006_062415_create_table_users does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}