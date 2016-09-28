<?php

class m160928_083014_create_table_slider extends CDbMigration
{
	public function up()


	{
		$this->createTable('o_slider', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY',
			'title' => 'VARCHAR(255)',
			'subtitle' => 'VARCHAR(255)',
			'slide-img' => 'VARCHAR(255)',
			'text'=>' VARCHAR(255)',
			'active'=>'TINYINT(1)',

		) , 'ENGINE=InnoDB CHARSET=utf8');
	}

	public function down()
	{
		echo "m160928_083014_create_table_slider does not support migration down.\n";
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

