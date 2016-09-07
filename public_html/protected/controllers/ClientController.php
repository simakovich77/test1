<?php


class ClientController extends Controller
{

    /**
 * This is the default 'index' action that is invoked
 * when an action is not explicitly requested by users.
 */
    public function actionIndex()
    {
        $namec = Yii::app()->getRequest()->getParam('name', null);
        echo $namec;

        $nameclientsp = Clients::model()->find('title=:title', array(':title'=>$namec));
        //shuffle($nameclientsp);
        //echo $nameclientsp;
        $datac = [
            'nameclient_acin' => $nameclientsp,

        ];
        $this->render('index',$datac);

    }


    public function actionView($id)
    {
       
        $dataclient = [
            'idclient' => $id,

            ];
        $this->render('view',$dataclient);
    }
   
}