<?php

class Slider extends CActiveRecord
{

    public function tableName()
    {
        return 'o_slider';
    }


    public function rules()
    {

        return array(

            array('year', 'numerical', 'integerOnly'=>true),
            array('title, subtitle, side-img, text', 'max'=>255),
            array('description', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, title, subtitle, side-img, text, active', 'safe', 'on'=>'search'),
        );
    }

    public function getUserProvider()
    {
        $criteria = new CDbCriteria;
        $criteria->order = 'name ASC';
        $dataProvider = new CActiveDataProvider('Slider',
            array(
                'criteria' =>$criteria,
                'pagination' => array(
                    'pageSize'=> 6,
                )

            )
        );

        return $dataProvider;
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
            'subtitle' => 'Subtitle',
            'slide-img' => 'Slide_img',
            'text' => 'Text',
            'active' => 'Active',
            'company' => 'Company',


        );
    }

    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('title',$this->title,true);
        $criteria->compare('subtitle',$this->subtitle,true);
        $criteria->compare('slide-img',$this->slide-img,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }


    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
