<?php

class UsersController extends Controller
{
	function index()
	{
		$this->view->generate('main_view.php', 'template_view.php', User::list());
	}

	function create() {
		$user = new User();
		$user->setName('Name');
		$user->save();
	}
}
