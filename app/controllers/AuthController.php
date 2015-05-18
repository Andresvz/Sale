<?php

class AuthController extends BaseController{

	public function showLogin()
	{
		# code...
		if(Auth::check()){

			//si tenemos la sesion iniciada mostrará la pagina de inicio
			return Redirect::to('home');
		}
		return View::make('login');
	}
	


	public function postLogin()
	{
		# code...
		$data = [
			'email' => Input::get('email'),
			'password' => Input::get('password')
		];

		if(Auth::attempt($data, Input::get('remember'))){

			//si los datos ingresados son correctos mostramos la pagina de inicio
			return Redirect::to('index');
		}else{
		

			return Redirect::back()->with('error_message', 'invalid data')->withInput();
		}

		
	}
	
	public function logout()
	{
		# code...
		Auth::logout();

		// Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return Redirect::to('Auth/Persona')->with('cerrar_sesion', 'Logged out correctly');
	}


}