<?php

class m160907_115618_add_field_cient extends CDbMigration
{
	public function up()
	{
		$this->addColumn('o_cient', 'description', 'text');

	}

	public function down()
	{
		echo "m160907_091300_add_field_clents does not support migration down.\n";
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