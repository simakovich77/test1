<?php

class BookController extends Controller
{

    public function actionIndex($id)
    {
       // $id=$_GET['id'];

        $model = Book::model()->findByPk($id);

       $this->render('index', array('model' => $model), true);
       

    }
}

