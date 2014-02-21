<?php

class TestController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		// get all the tests
		$tests = Test::find('52733912a3e4852b01b7acd9');
		$networks = Test::find('52733912a3e4852b01b7acd9')->networks;
		$hostnames = Test::find('52733912a3e4852b01b7acd9')->hostnames;
		
		$data = array(
			'tests' => $tests,
			'networks' => $networks,
			'hostnames' => $hostnames,
		);

		// load the view and pass the tests
		return View::make('tests.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		// load the create form (app/views/tests/create.blade.php)
		return View::make('tests.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array('name' => 'required', 'ip' => 'required');
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator -> fails()) {
			return Redirect::to('tests/create') -> withErrors($validator) -> withInput(Input::except('password'));
		} else {
			// store
			$test = new Test;
			$test -> n_name = Input::get('name');
			$test -> n_ip = Input::get('ip');
			$test -> n_status = Input::get('n_status');
			$test -> save();

			// redirect
			Session::flash('message', 'Successfully created test!');
			return Redirect::to('tests');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		// get the test
		$networks = Test::find('52733912a3e4852b01b7acd9')->networks;
		
		$data = array(
			'networks' => $networks,
		);

		// show the view and pass the test to it
		return View::make('tests.show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		// get the test
		$test = Test::find($id);

		// show the edit form and pass the test
		return View::make('tests.edit') -> with('test', $test);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array('name' => 'required', 'ip' => 'required');
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator -> fails()) {
			return Redirect::to('tests/' . $id . '/edit') -> withErrors($validator) -> withInput(Input::except('password'));
		} else {
			// store
			$test = Test::find($id);
			$test -> n_name = Input::get('name');
			$test -> n_ip = Input::get('email');
			$test -> n_status = Input::get('nerd_level');
			$test -> save();

			// redirect
			Session::flash('message', 'Successfully updated test!');
			return Redirect::to('tests');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		// delete
		$test = Test::find($id);
		$test -> delete();

		// redirect
		Session::flash('message', 'Successfully deleted the test!');
		return Redirect::to('tests');
	}

}
