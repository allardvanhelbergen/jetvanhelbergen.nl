<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class SiteController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

	/**
	 * Displays the Photo page
	 */
	public function actionBeelden()
	{
		$this->render('beelden');
	}

	/**
	 * Displays the Project page
	 */
	public function actionProjecten()
	{
		$this->render('projecten');
	}

}