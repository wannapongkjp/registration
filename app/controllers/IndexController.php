<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
	//@TODO: controler list
	public function indexAction()
	{
		$users = Users::find();
		$this->view->users = $users;
	}

}
