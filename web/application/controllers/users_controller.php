<?php

class UsersController extends Controller
{
    public function index()
    {
        $this->view->generate('users/index.php', 'template_view.php', User::list());
    }

    public function new()
    {
        $user_attributes = get_object_vars(new User());
        $this->view->generate('users/form.php', 'template_view.php', $user_attributes);
    }

		public function edit()
    {
        $user_attributes = get_object_vars(User::find($_GET['id']));
        $this->view->generate('users/form.php', 'template_view.php', $user_attributes);
    }

		public function update()
    {
				$user = User::find($_POST['id']);
        $user->update_attributes($_POST);
        header("Location: /");
    }

    public function create()
    {
        $user = new User($_POST);
        $user->save();
				header("Location: /");
    }

		public function delete()
    {
        $user = User::find($_GET['id']);
				$user->destroy();
				header("Location: /");
    }
}
