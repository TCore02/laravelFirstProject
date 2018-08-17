<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiController extends Controller
{
    public function register (Request $request) {
    	if($request->email) {
    		if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
    			if ($request->password) {
    				if(strlen($request->password) >= 6) {
    					if (strlen(preg_replace('/\s+/', '',$request->password)) < 6 ) {
    						return response()->json([
						        'status' => false,
						        'message' => "Please remove space or tab from password."
						    ]);
    					}
    					$checkEmailExist = User::where('email',$request->email)->exists();
    					if($checkEmailExist) {
    						return response()->json([
						        'status' => false,
						        'message' => "Email is already exists."
						    ]);
    					} else {
    						$user = new User();
    						$user->email = $request->email;
    						$user->password = \Hash::make($request->password);
    						$user->name = $request->name;
    						$user->user_name = "$request->name".time();
    						$user->save();
    						return response()->json([
						        'status' => true,
						        'message' => "User is registered successfully."
						    ]);
    					}
    				} else {
    					return response()->json([
					        'status' => false,
					        'message' => "Password length should be minimum 6 characters."
					    ]);
    				}
    			} else {
    				return response()->json([
				        'status' => false,
				        'message' => "Password is required."
				    ]);
    			}
    		} else {
    			return response()->json([
			        'status' => false,
			        'message' => "Email is not valid. Please check it once..."
			    ]);
    		}
    	} else {
    		return response()->json([
		        'status' => false,
		        'message' => "Email is required."
		    ]);
    	}
    }
}