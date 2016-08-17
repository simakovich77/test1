<?php

class BookController extends Controller
{
    public function actionIndex()
    {
        $array = array(2,3);
       $num = 'dfgdfgdfgfdg';

        $a = Book::model()->deleteAll('title = :title', array (':title' => $num));
        if($a)
        {
            echo 'Есть!';}
            else

            {
                echo 'Нееет';
            }

        $this->render('index');
        //echo $a;
        /*
        //$a = 1234;
        //var_dump($a);
     foreach ($a as $one) {
        echo $one->title;
            echo '<hr />';

       }*/
        //echo $a->title;

            }

}

