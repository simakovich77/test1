<?php

class m160815_101014_test_gii extends CDbMigration
{
	public function up()
	{
		$this->createTable('o_page', array(
			'id' => 'int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY',
			'title' => 'VARCHAR(255)',
			'text' => 'text',
		) , 'ENGINE=InnoDB CHARSET=utf8');
	}

	public function down()
	{
		dropTable('el_slider');
		return false;
	}
}