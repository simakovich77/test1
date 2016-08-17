<?php

class m160815_123647_table_create_o_book extends CDbMigration
{
	public function up()
	{
		$this->createTable('o_book', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY',
			'title' => 'VARCHAR(255)',
			'author' => 'VARCHAR(255)',
			'year' => 'int(11)',	
			'description' => 'text',
			'link' => 'VARCHAR(255)',
			'img'=>'VARCHAR(255)'
		) , 'ENGINE=InnoDB CHARSET=utf8');
	}

	public function down()
	{
		dropTable('o_book');
		return false;
	}
}