<?php

class m120302_172329_create_tbl_news extends CDbMigration
{
  public function up()
  {
      $this->createTable('el_slider', array(
      'id' => 'pk',
      'title' => 'VARCHAR(200) NOT NULL',
      'desc' => 'text NOT NULL',
      'link' => 'VARCHAR(200) NOT NULL',
      'img' => 'VARCHAR(200) NOT NULL',
      'show' => 'tinyint(1) DEFAULT 1',
      'order' => 'int(10) DEFAULT 0',
      ) , 'ENGINE=InnoDB CHARSET=utf8'); 
  }
  
  public function down()
  {
      dropTable('el_slider');
      return false;
  }	
}