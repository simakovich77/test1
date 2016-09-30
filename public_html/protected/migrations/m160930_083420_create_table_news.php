<?php

class m160930_083420_create_table_news extends CDbMigration
{
	public function up()


	{
		$this->createTable('o_news', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY',
			'title' => 'VARCHAR(255)',
			'img' => 'VARCHAR(255)',
			'text'=>' VARCHAR(255)',
			'ndate' => 'datetime',

		) , 'ENGINE=InnoDB CHARSET=utf8');
	}

	public function down()
	{
		echo "m160930_083420_create_table_news does not support migration down.\n";
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