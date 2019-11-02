<?php

class UsersController extends Controller
{
	function index()
	{
		$user = new User();
		$user->setName('Name');
		$user->save();

		echo "Created Product with ID " . $user->getId() . "\n";

		$this->view->generate('main_view.php', 'template_view.php');
	}
}
