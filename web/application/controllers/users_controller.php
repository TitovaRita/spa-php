<?php

class UsersController extends Controller
{
	function index()
	{
		print_r(User::list());
		$this->view->generate('main_view.php', 'template_view.php');
	}

	function create() {
		$user = new User();
		$user->setName('Name');
		$user->save();
	}
}
