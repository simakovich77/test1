<?php

class m161006_084810_create_table_comments extends CDbMigration
{
	public function up()
	{
		$this->createTable('o_comments', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY',
			'content' => 'VARCHAR(255)',
			'pageid' => 'int(11)',
			'created' => 'int(11)',
			'userid' => 'int(11)',
			'guest' => 'VARCHAR(255)',
		) , 'ENGINE=InnoDB CHARSET=utf8');
	}

	public function down()
	{
		echo "m161006_084810_create_table_comments does not support migration down.\n";
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