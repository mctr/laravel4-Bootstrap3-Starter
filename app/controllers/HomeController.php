<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getIndex()
	{
		return View::make('index');
	}
	
	public function getLogin()
	{
		return View::make('user.login');
	}
	
	public function postLogin()
	{
		$input = Input::all();
		$rules = array('email' => 'required|email', 'password' => 'required');
		
		$validate = Validator::make($input, $rules);
		
		if($validate->fails())
		{
			return Redirect::to('login')->with('message', 'Hatalı veya Eksik bilgi girdiniz.');   //withErrors($validate);
		} else {
			$credentials = array('email' => $input['email'], 'password' => $input['password']);
			
			if(Auth::attempt($credentials))
			{
				return Redirect::to('home');
			} else {
				return Redirect::to('login');
			}
		}
	}
	
	public function getHome()
	{
		return View::make('user.home');
	}
	
	public function getRegister()
	{
		return View::make('user.register');
	}
	
	public function postRegister()
	{
		$input = Input::all();
		
		$rules = array('firstname' => 'required', 'lastname' => 'required', 'email' => 'required|unique:users|email', 'password' => 'required');
		
		$validate = Validator::make($input, $rules);
		
		if ($validate->passes())
		{
			//~ $password = $input['password'];
			//~ $password = Hash::make($password);
			
			$user = new User();
			$user->firstname = $input['firstname'];
			$user->lastname = $input['lastname'];
			$user->email = $input['email'];
			$user->password = $input['password'];
			$user->save();
			
			return Redirect::to('login');			
		} else {
			return Redirect::to('register')->with('message', 'Eksik Bilgi girdiniz!'); //withErrors($validate)->withInput();
		}	
	}
	
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

}
