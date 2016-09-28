<?php

class UserController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = Users::model()->getUserProvider();

        $data = ['dataProvider' => $dataProvider];
        $this->render('index', $data);
    }

    public function actionUserprofile($id)
    {
        $uSER = Users::model()->findByPk($id);
        $dAT = [
            'userprof'=>$uSER,

        ];

        $this->render('userprofile', $dAT);
    }



}