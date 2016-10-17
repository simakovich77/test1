<?php

class DefaultController extends AdminController
{
	public function actionIndex()
	{


	$this->render('index');
	}

	public function actionArticles()
	{
		$dataProvider = News::model()->getNewsProvider();

		$data = ['dataProvider' => $dataProvider];
		$this->render('articles', $data);

	}

    public function actionUpdate($id)
    {

echo "dfg";
        $data= News::model()->findAllByPk($id);


        $this->render('update',['data'=>$data]);
    }

    public function actionView($id)
    {
        $data =News::model()->findAllByPk($id);

        $this->render('view',$data);
    }
}