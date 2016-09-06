<?php

class Clients extends CActiveRecord
{

    public function tableName()
    {
        return 'o_cient';
    }


    public function rules()
    {

        return array(
            array('year', 'numerical', 'integerOnly'=>true),
            array('title, author, link, img', 'length', 'max'=>255),
            array('description', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, title, author, year, description, link, img', 'safe', 'on'=>'search'),
        );
    }



    public function relations()
    {
        return array(
        );
    }


    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'img' => 'Img',
        );
    }


    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('title',$this->title,true);
        $criteria->compare('img',$this->img,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }


    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
