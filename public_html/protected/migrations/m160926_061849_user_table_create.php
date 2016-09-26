<?php

class m160926_061849_user_table_create extends CDbMigration
{
	public function up()


	{
		$this->createTable('o_user', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY',
			'name' => 'VARCHAR(255)',
			'surname' => 'VARCHAR(255)',
			'birth_date' => 'datetime',
			'phone' => 'VARCHAR(255)',
			'img'=>'VARCHAR(255)',
			'text'=>' VARCHAR(255)',
			'director'=>'VARCHAR(255)',
			'company'=>'VARCHAR(255)',
		) , 'ENGINE=InnoDB CHARSET=utf8');
	}




	public function down()
	{
		echo "m160926_061849_user_table_create does not support migration down.\n";
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