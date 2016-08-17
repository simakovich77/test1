<?php

class BookController extends Controller
{
    public function actionIndex()
    {
        $array = array(2, 3);

$a = Book::model()->findAllByPk($array);

        foreach ($a as $one) {
                echo $one->title;
            }
            echo $a->title;
        }

}