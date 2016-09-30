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






}