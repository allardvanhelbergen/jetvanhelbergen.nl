<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class SiteController extends CController
{
  public $title,
      $description;
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
	  $this->title = 'Photos en beelden';
	  $this->description = 'Bekijk photo&apos;s van Jet van Helbergen. Zie '.
	      'beelden van solo concerten, opera&apos;s, koor concerten en andere '.
	      'optredens.';
		$this->render('beelden');
	}

	/**
	 * Displays the Project page
	 */
	public function actionProjecten()
	{
	  $this->title = 'Agenda concerten en projecten';
	  $this->description = 'Bekijk de projecten waar Jet bij betrokken is. '.
	      'Zie concert data, locaties and aanvangstijden die in haar agenda '.
	      'staan.';
		$this->render('projecten');
	}
}