<?php

class m161006_062448_create_table_articles extends CDbMigration
{
	public function up()
	{
		$this->createTable('o_articles', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY',
			'title' => 'VARCHAR(255)',
			'content' => 'VARCHAR(255)',
			'created' => 'int(11)',
			'status'=>'int(11)',
		) , 'ENGINE=InnoDB CHARSET=utf8');
	}

	public function down()
	{
		echo "m161006_062448_create_table_articles does not support migration down.\n";
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