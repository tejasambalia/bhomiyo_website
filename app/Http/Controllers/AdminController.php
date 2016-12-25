<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\ValidationException;
use App\User;
use DB;

class AdminController extends Controller
{
	public function dashboard(){
		return view('dashboard');
	}
}