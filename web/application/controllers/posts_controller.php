<?php

class PostsController extends Controller
{
    public function index($params)
    {
        $posts = User::find($params[0])->getPosts();
        $this->view->generate('posts/index.php',
                              'template_view.php',
                              array('posts'=>$posts, 'user_id'=>$params[0]));
    }

    public function new($params)
    {
        $post_attributes = get_object_vars(new Post(User::find($params[0])));
        $this->view->generate('posts/form.php',
                              'template_view.php',
                              array('post_attributes'=>$post_attributes,
                                    'user_id'=>$params[0]));
    }

    public function create($params)
    {
        $user = User::find($params[0]);
        $post = new Post($user);
        $post->set_params($_POST);
        $post->save();
        $this->redirect_root($params[0]);
    }

		public function edit($params)
    {
        $post_attributes = get_object_vars(Post::find($_GET['id']));
        $this->view->generate('posts/form.php',
                              'template_view.php',
                              array('post_attributes'=>$post_attributes,
                                    'user_id'=>$params[0]));
    }

		public function update($params)
    {
				$user = Post::find($_POST['id']);
        $user->update_attributes($_POST);
        $this->redirect_root($params[0]);
    }

		public function delete($params)
    {
        $user = Post::find($_GET['id']);
				$user->destroy();
				$this->redirect_root($params[0]);
    }

    private function redirect_root($user_id)
    {
        $path = "/users/$user_id/posts";
        header("Location: $path");
    }
}
