<?php

namespace App\Http\Controllers;
use App\Mentor;
use App\User;

use Illuminate\Http\Request;

class MentorController extends Controller
{
	public function create()
	{
		return view ('mentor.registration');
	}
	public function store()

	{

		$this->validate(request(),[
			'password' => 'required|confirmed'
		]);
		Mentor::create([
			'name' => request('name'),
			'password' => bcrypt(request('password')),
			'department' => request('department'),
			'email' => request('email'),
			'pout' =>request('pout'),
			'mentee' => request('mentee'),
			'pref1' =>request('pref1'),
			'pref2' =>request('pref2'),
			'pref3' =>request('pref3'),
			'phone' => request('phone'),
			'firm' => request('firm'),
			'desg' => request('desg')

		]);
		$user = User::create([
			'name' => request('name'),
			'password' => bcrypt(request('password')),
			'type' => 'mentor',
			'email' => request('email'),
		]);

		auth()->login($user);
		
		return redirect('/show/'.$user->id);
	}
}
