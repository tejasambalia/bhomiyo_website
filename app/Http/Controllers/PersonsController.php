<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\ValidationException;
use App\User;
use DB;

class PersonsController extends Controller
{
	public function add_records(){
		return view('add_records');
	}

	public function edit_records(){
		return view('edit_records');
	}

	public function handle_add_records(Request $request){
		$this->validate($request, User::$add_records_validation_rules);
		$data = $request->only('relation', 'first_name', 'middle_name', 'last_name', 'date_of_birth', 'contact', 'mail_id', 'education', 'occupation', 'home_town', 'married_status');
		DB::table('person_data')->insert([
			'first_name' => $data['first_name'],
			'middle_name' => $data['middle_name'],
			'last_name' => $data['last_name'],
			'date_of_birth' => $data['date_of_birth'],
			'contact' => $data['contact'],
			'mail_id' => $data['mail_id'],
			'education' => $data['education'],
			'occupation' => $data['occupation'],
			'home_town' => $data['home_town'],
			//'married_status' => $data['married_status']
			'married_status' => '0'
		]);
	}

	public function handle_edit_records(){
		
	}
}