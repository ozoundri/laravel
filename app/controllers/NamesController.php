<?php

class NamesController extends BaseController {


	public function getIndex()
	{
		$people = Person::all();
		

		return View::make('names.index')
			->with('people', $people);
	}


	public function getCreate()

	{
		return View::make('names.create');
	}
	public function postCreate()

	{
		$name = Input::get('name');

		Person::insert(['name' => $name]);

		return Redirect::to('names');
	}
	public function getEdit()
	{

		
		$id = Request::segment(3);	
		
		

		$people = DB::table('people')->where('id', $id)->get();

	


		return View::make('names.edit')
			->with('id', $id)
			->with('people', $people);


			


	}

	public function postEdit()
	{

		$id = Request::segment(3);	
		$name = Input::get('name');

		DB::table('people')
            ->where('id', $id)
            ->update(array('name' => $name));


		return Redirect::to('names');
	}
	public function getShow($id){

		$people = DB::table('people')->where('id', $id)->get();


		if ($people == null)  return 'User doesnt exist. <a href="../names">Return</a>';

		return View::make('names.show')
			->with('people', $people);
	}

}