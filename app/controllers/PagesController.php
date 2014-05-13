<?php 

class PagesController extends BaseController {
	
	public function getHello()
	{
		$name = DB::table('people')->pluck('name');
		return View::make('hello')->with('name', $name);
	}

	


}