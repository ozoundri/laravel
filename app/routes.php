<?php


Route::get('names/sereach/{name}', function($name)
{

	return Person::byFirstName($name)->get();
});


Route::get('names/{id}', 'NamesController@getShow');
Route::controller('names', 'NamesController');

Route::controller('/', 'BlogController');

/*

Route::get('login', function(){
	/*echo '<form method="post" action="'.URL::to('login').'">';
	echo '<p><input type="text" id="email" name="email" placeholder="email"></p>';
	echo '<p><input type="password" id="password" name="password"></p>';
	echo '<p><input type="submit" value="Sign in"></p>';
	echo '</form>';

});


Route::post('login', function(){

	$userdata = array(
			'email' => Input::get('email'),
			'password' =>Input::get('password'));

	if(Auth::attempt($userdata)){
		return Redirect::to('dashboard');
	}
	else {
		echo 'Nopee';
	}
});

Route::get('signup', function(){

	/*echo '<form method="post" action="'.URL::to('signup').'">';
	echo '<p><input type="text" id="username" name="username" placeholder="username"></p>';
	echo '<p><input type="text" id="email" name="email" placeholder="email"></p>';
	echo '<p><input type="password" id="password" name="password"></p>';
	echo '<p><input type="password" id="confirm_password" name="confirm_password"></p>';
	echo '<p><input type="submit" value="Sign up"></p>';
	echo '</form>';

});

Route::post('signup', function(){

	$userdata = array(
			'username' => Input::get('username'),
			'email' => Input::get('email'),
			'password' =>Hash::make(Input::get('password')));
		$user = new User($userdata);
		$user->save();

		return Redirect::to('login');

});
/*
Route::get('dashboard', array('before' => 'auth', function(){

	$username = Auth::user()->username;

	
	echo 'Welcome to your Dashboard, '. $username .'! <a href="'. URL::to('logout') .'">Logout?</a>';
	
}));

Route::get('logout', function(){
	Auth::logout();
	return Redirect::to('login');
});*/
