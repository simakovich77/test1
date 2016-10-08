<?php

class NewsController extends Controller
{
    public function actionIndex()
    {
        $Data = News::model()->findAll();
        $dAT = [
            'NewsData'=>$Data,

        ];

        $this->render('index', $dAT);
        
    }

    public function actionNews($id)
    {
        $Data = News::model()->findByPk($id);
        $dAT = [
            'NewsData'=>$Data,

        ];

        $this->render('news', $dAT);

    }





}