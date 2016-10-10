<?php

class m161006_082947_create_table_category extends CDbMigration
{
	public function up()
	{
		$this->createTable('o_category', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY',
			'title' => 'VARCHAR(255)',
			'position' => 'VARCHAR(255)',
		) , 'ENGINE=InnoDB CHARSET=utf8');
	}

	public function down()
	{
		echo "m161006_082947_create_table_category does not support migration down.\n";
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