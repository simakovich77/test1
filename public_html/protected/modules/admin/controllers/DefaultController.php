<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{


	$this->render('index');
	}

	public function actionArticles()
	{
		$Data = News::model()->findAll();
		$dAT = [
			'NewsList'=>$Data,

		];
		$this->render('articles', $dAT);
	}
}