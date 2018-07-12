<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
	public function log_in()
	{
		return view ('log_in');
	}

	public function homepage()
	{
		return view ('homepage');
	}

    public function register(Request $request)
    {
    	
    	$rules = array(
    			'name'		=>'required',
    			'user_name'	=>'required|unique:users|max:10',
    			'email'		=>'required|unique:users',
    			'password'	=>'required|min:8',
    			'password2'	=>'required_with:password|same:password|min:8'

    		);
    		 $this->validate( $request , $rules);

    		$user = new User();
    		$user->name = $request->name;
    		$user->user_name = $request->user_name;
    		$user->email = $request->email;
    		$user->password = $request->password;
    		$user->save();

    		return redirect()->route('project.log_in')->with(['success' => true, 'message'=>'Registered Successfully.. Now Login!!!!']);

    }

    public function loginf(Request $request)
    {
    	$rules = array(
    			'email'	=>'required',
    			'password'	=>'required|min:8',
    		);
    		 $this->validate( $request , $rules);

    	$credentials = [
    		'email' => $request->email,
    		'password' => $request->password
    	];

    	if(Auth::attempt($credentials)) {

    		return redirect()->route('project.homepage');
    	}
    	else {
    		return redirect()->route('project.log_in')->with(['success'=>false, 'message' => "Check your credentials!!"]);
    	}

    }
    public function logout()
    {
    	Auth::logout();
    		return redirect()->route('project.homepage');
    }
}
