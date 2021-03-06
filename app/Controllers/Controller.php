<?php

namespace App\Controllers;

use League\Plates\Engine;

class Controller
{
	protected $view;

	public function __construct()
	{
		$this->view = new Engine(ROOTDIR . 'views');
	}

	public function sendPage($page, array $data = [])
	{
		exit($this->view->render($page, $data));
	}
}
