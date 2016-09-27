<?php

class Users extends CActiveRecord
{

    public function tableName()
    {
        return 'o_user';
    }


    public function rules()
    {

        return array(

            array('year', 'numerical', 'integerOnly'=>true),
            array('name, surname, phone, img, text, director, company', 'length', 'max'=>255),
            array('description', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, surname, phone, img, text, director, company, birth_date', 'safe', 'on'=>'search'),
        );
    }

    public function getUserProvider()
    {
        $criteria = new CDbCriteria;
        $criteria->order = 'name ASC';
        $dataProvider = new CActiveDataProvider('Users',
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
            'name' => 'Name',
            'surname' => 'Surname',
            'phone' => 'Phone',
            'text' => 'Text',
            'director' => 'Director',
            'company' => 'Company',
            'img' => 'Img',
            'birth_date' => 'Birth_date',

        );
    }

    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('surname',$this->surname,true);
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
