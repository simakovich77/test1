<?php
class MyController extends Controller
{
    public function actionOne()
    {
    echo $this->two();
    }

    public function actionTwo()
    {
       echo 'one';
    }

}
