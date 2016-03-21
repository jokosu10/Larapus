<?php

class HomeController extends BaseController {

	/*
		class for routing layout
	*/
	protected $layout = 'layouts.master';
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

	public function dashboard() {
		$this->layout->content = View::make('dashboard.index')->withTitle('Dasboard');
	}

}
