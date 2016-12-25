<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\ValidationException;
use App\User;
use DB;

/**
* 
*/
class AuthController extends Controller
{
	
	public function handleLogin(Request $request){
		$data = $request->only('user', 'password');
		if($data['user']!=''&&$data['password']!=''){
			if($data['user']=='admin'&&$data['password']=='admin'){
				return redirect()->intended('dashboard');
			}
			else{
				return back()->withInput()->withErrors(['error' => 'Username or password is invalid']);	
			}
		}
		else{
			return back()->withInput()->withErrors(['error' => 'Please enter user name and password']);
		}
	}

	public function logout(){
		\Auth::logout();
	}
}