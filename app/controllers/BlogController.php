<?php
	
class BlogController extends BaseController {


	
	public function getIndex()
	{


		$posts = Post::orderBy('updated_at', 'DESC')->get();

		return View::make('index')
			->with('posts', $posts);
		


	}	
	

	public function getPost()
	{
		$segment = Request::segment(2);

		


		if(isset($segment) /*&& is_int($segment)*/)
		{

			//$comments = Comment::where('id', $segment)->get();

			$comments = DB::table('comments')
					->where('postid', $segment)
                    ->orderBy('created_at', 'desc')
                    ->get();


            

			return View::make('post')
				->with('comments', $comments);

		}

	


	}
	public function postPost()
	{

		$commentdata = array(
			'userid' => Auth::user()->id,
			'postid' => Request::segment(2),
			'comment' =>Input::get('comment'));

		$comment = new Comment($commentdata);
		$comment->save();

		$segment = Request::segment(2);

		return Redirect::to('post/'.$segment.'');

	}
	public function getLogin() 
	{

		return View::make('login');

	}

	public function postLogin()
	{

		$userdata = array(
				'email' => Input::get('email'),
				'password' =>Input::get('password'));

		if(Auth::attempt($userdata)){
			return Redirect::to('profile');
		}
		else {
			echo 'Combinatie incorrect';
		}
	}
	public function getSignup()
	{

		return View::make('signup');
	}
	public function postSignup()
	{

		$userdata = array(
			'username' => Input::get('username'),
			'email' => Input::get('email'),
			'password' =>Hash::make(Input::get('password')));
		$user = new User($userdata);
		$user->save();

		return Redirect::to('login');
	
	
	}

	public function getLogout()

	{
		Auth::logout();
		return Redirect::to('index');
	}

	public function getAdmin()
	{

if(isset(Auth::user()->id) && Auth::user()->id == 1) {

			$username = Auth::user()->username;

			$posts = Post::get();
				
			

			return View::make('admin')
				->with('username', $username)
				->with('posts', $posts);

		}
		else{
			return Redirect::to('index');
		}

		
		
	}
	public function postAdmin() {


			$segment = Request::segment(2);

			DB::table('posts')
            ->where('id', $segment)
            ->update(array(
            				'title' => Input::get('title'),
            			 'text' => Input::get('text')));

            return Redirect::to('index');
        

		}

	public function getAdd(){

		if(isset(Auth::user()->id) && Auth::user()->id == 1) {

					$username = Auth::user()->username;

					
						
					

					return View::make('add')
						->with('username', $username);

			}
			else{
				return Redirect::to('index');
			}
		}
	public function postAdd() {

		$postdata = array(
			'title' => Input::get('title'),
			'text' =>Input::get('text'));

		$post = new Post($postdata);
		$post->save();

		return Redirect::to('index');
        

		}


	public function getProfile() {

		

		return View::make('profile');
	}

	public function postProfile() {

		DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(array(
            				'avatar' => Input::get('avatar')));

            return Redirect::to('profile');



	}

}


?>