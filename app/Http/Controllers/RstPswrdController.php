<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\passwordReset;
use Mail;
use Illuminate\Support\Facades\Input;

class RstPswrdController extends Controller
{
    public function frgt(Request $request)
    {
    	$rules = array(
    			'email'	=>'required'
    		);
		$this->validate( $request , $rules);
    	$exists = User::where('email','=',$request->email)->first();
        



    	if($exists){
    		$token = str_random(63);
    		$reset = new passwordReset();
    		$reset->email = $request->email;
    		$reset->token = $token;
    		$reset->save();



    		Mail::send('resetpasswordemail',['email' => $reset->email ,'token' => $reset->token , 'user_id' => base64_encode($exists->id)],
    				function($message) use($request) {
    				$message->from('work@tier5.us','Hello');
    				$message->to($request->email)->subject('Reset Password of Team Core');
    		});
    	}

    }

    public function reset_password_view() {

    	

			$token = (Input::has('token')) ? Input::get('token') : null;
			$user_id = (Input::has('user_id')) ? Input::get('user_id') : null;
			

            $exists=passwordReset::where('token','=',$token)->exists();
            if(!$exists)
            {
                dd("You already changed the password using this link, So the link is expired");

            }
            else
            {
                return view('change_password',[
                'token' => $token,
                'user_id' => $user_id
                ]);
            }

    }




    public function newPass (Request $request){

    
             
    		//validation
             $rules = array(
    			'password' => 'required|min:8',
            	'password2' => 'required_with:password|same:password|min:8'
    		);
				$this->validate( $request , $rules);
			//upto this validation

                //$user_id = (Input::has('user_id')) ? Input::get('user_id') : null;
				
				
                $user = User::find(base64_decode($request->user_id));
    				

               
                if($user)
                 {  
                     $user->password = $request->password;
                     $user->update();    
                    passwordReset::where('token', $request->token)->delete();
                    return view('log_in');
                 }
                else
                 {
                   
                        dd("Invalid link or  the link got expired. Please go back and try again later");    
                     
                  }
        }

}
