<?php

class usuarioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		 return View::make('private/login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postLogin()
	{
		if (Auth::attempt( array('username' => Input::get('username'), 'password' => Input::get('password') ), true )){
		        return Redirect::to('private/inicio');
		    }else{
		        return Redirect::to('private/login')->with('mensaje_login', 'Ingreso invalido');
		    }
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
