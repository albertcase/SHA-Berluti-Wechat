<?php

class ShoeController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public $layout='//layouts/shoe';

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionForm()
	{
		$this->render('form');
	}

}