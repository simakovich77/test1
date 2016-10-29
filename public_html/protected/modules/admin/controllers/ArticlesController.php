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

            $data->save();
            $data->img=CUploadedFile::getInstance($data,'img');
            if($data->save())
            {
                $data->img->saveAs('path/to/localFile');
                // redirect to success page
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