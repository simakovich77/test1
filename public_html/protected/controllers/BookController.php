<?php

class BookController extends Controller
{

    public function actionIndex()
    {
       // $id=$_GET['id'];

        $a = Book::model()->findByPk(2);
       // $model->title = 'dfgdfgdfgdfgdfgdfgdfgdf';
       // $model->author = 'Vano';
       echo $a->title;
       // $model->save(false);

    }
}

