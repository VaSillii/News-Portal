<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function authShow() 
	{
		return view('pages.auth');
	}   

	public function regShow()
	{
		return view('pages.reg');	
	}

	public function registrPost() {
		$this->validate($this->request, [
			'login' => 'required|unique:users|max:255',
			'email' => 'required|email|unique:users|max:255',
			'password' => 'required|max:255|min:6',
		]);
	}
}
