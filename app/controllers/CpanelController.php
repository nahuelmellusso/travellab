<?php

class CpanelController extends BaseController {

	
	public function __construct()
	{
		$this->beforeFilter('auth');
	}	



	public function getIndex()
	{
		 return View::make('private/principal');
	}


}
