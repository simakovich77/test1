<?php

class ArticlesController extends AdminController
{
    public function actionIndex()
    {


        $this->render('index');
    }

    public function actionArticles()
    {
        $dataProvider = News::model()->getNewsProvider();

        $data = ['dataProvider' => $dataProvider];
        $this->render('articles', $data);

    }

    public function actionUpdate($id)
    {


        $data =News::model()->findByPk($id);



        if(isset($_POST['News'])) {

            $data->attributes=$_POST['News'];
            $data->img=CUploadedFile::getInstance($data,'img');
            $path = 'img'.DIRECTORY_SEPARATOR.'upload'.
                DIRECTORY_SEPARATOR.$data->img->getName();

            if ($data->validate()) {
                $data->img->saveAs( Yii::getPathOfAlias('webroot').DIRECTORY_SEPARATOR.$path);
                $data->img = DIRECTORY_SEPARATOR.Yii::app()->baseUrl.$path;
                $data->save();
            }
        }

        $dat = ['d' => $data];
        $this->render('update',$dat);
    }

    public function actionView($id)
    {
        $data =News::model()->findAllByPk($id);

        $dat = ['d' => $data];
        $this->render('update',$dat);
    }
}