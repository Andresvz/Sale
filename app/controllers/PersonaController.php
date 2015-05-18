<?php

class PersonaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /persona
	 *
	 * @return Response
	 */

	public function loginPersona()
	{
		# code...
		
					 
				$correo = Input::get('email');

				$user = Persona::where('email',$correo)->get()->first();
				if(!empty($user->email)){
					return Redirect::to('index');
				}
				else{
					return Redirect::to('Auth/Persona');
				}			
					
	
	}

	

}