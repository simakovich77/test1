<?php


class ClientController extends Controller
{

    /**
 * This is the default 'index' action that is invoked
 * when an action is not explicitly requested by users.
 */
    public function actionIndex()
    {
        $dataProvider = Clients::model()->getClientsProvider();

        $data = ['dataProvider' => $dataProvider];
        $this->render('index', $data);
    }


    public function actionView($id)
    {
        $client = Clients::model()->findByPk($id);

        $this->render('view', ['client' => $client]);
    }
   
}