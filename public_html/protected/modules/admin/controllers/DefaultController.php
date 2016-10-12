<?php

class DefaultController extends Controller
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
}