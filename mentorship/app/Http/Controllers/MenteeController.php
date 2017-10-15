<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentee;
use App\User;
class MenteeController extends Controller
{
	public function create()
	{
		return view ('mentee.registration');
	}
	public function store()

	{

		$this->validate(request(),[
			'password' => 'required|confirmed'
		]);
		Mentee::create([
			'name' => request('name'),
			'password' => bcrypt(request('password')),
			'department' => request('department'),
			'email' => request('email'),
			'hall' =>request('hall'),
			'roll' => request('roll'),
			'pref1' =>request('pref1'),
			'pref2' =>request('pref2'),
			'pref3' =>request('pref3'),
			'phone' => request('phone'),
			'q1' => request('q1'),
			'q2' => request('q2'),
			'cgpa' => request('cgpa'),
			'current' => request('current')

		]);
		$user = User::create([
			'name' => request('name'),
			'password' => bcrypt(request('password')),
			'type' => 'mentee',
			'email' => request('email'),
		]);

		auth()->login($user);
		return redirect('/show/'.$user->id);	
	}
}
