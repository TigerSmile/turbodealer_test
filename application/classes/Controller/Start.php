<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Start extends Controller {

	public function action_index()
	{
		echo View::factory('index');
	}

} // End Welcome
