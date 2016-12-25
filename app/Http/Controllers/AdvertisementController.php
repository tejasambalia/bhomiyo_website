<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\ValidationException;
use App\User;
use DB;

class AdvertisementController extends Controller
{
	public function add_advertisement(){
		return view('add_advertisement');
	}

	public function edit_advertisement(){
		return view('edit_advertisement');
	}

	public function handle_add_advertisement(){
		
	}

	public function handle_edit_advertisement(){
		
	}
}