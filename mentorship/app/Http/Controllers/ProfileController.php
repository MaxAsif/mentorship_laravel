<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentor;
use App\Mentee;
use App\User;

class ProfileController extends Controller
{
    public function index($id)
    {
    	$user = User::find($id);
    	auth()->login($user);
    	//dd($user);
        return redirect('/show');

    }
    public function show()
    {
        $user = auth()->user();
        if($user->type == 'mentor')
            $details = Mentor::where('email',$user->email)->first();
        else if($user->type == 'mentee')
            $details = Mentee::where('email',$user->email)->first();

        return view('show',compact('details'));
    }
    public function store()
    {

        if(!auth()->attempt(request(['email','password'])))
        {
           
            return back()->withErrors([
                'message' => 'Please check-in your credentials'
            ]);

        }
        return redirect('/show');
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
    
}
