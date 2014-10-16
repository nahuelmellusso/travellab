<?php

class CpanelController extends BaseController {

	protected $layout = "private/cpanel";

	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}

	
	
	public function getLogin() {
		$this->layout->content = View::make('private/login');
	}

	public function postSignin() {
		if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
			return Redirect::to('private/cpanel')->with('message', 'You are now logged in!');
		} else {
			return Redirect::to('private/login')
				->with('message', 'Your username/password combination was incorrect')
				->withInput();
		}
	}

	public function getDashboard() {
		$this->layout->content = View::make('private/cpanel');
	}

	public function getLogout() {
		Auth::logout();
		return Redirect::to('private/login')->with('message', 'Your are now logged out!');
	}


}
