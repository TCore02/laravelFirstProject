<?php

Route::post('newuser', 'UserController@register');

Route::post('login', 'UserController@loginf');

Route::post('frgt', 'RstPswrdController@frgt');

Route::post('cnfrmPass', 'RstPswrdController@newPass');

Route::post('afterposting', 'PostController@posting');








Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});
Route::get('users', function () {
    return view('users');
});









Route::get('logout',[
		'uses' => 'UserController@logout',
		'as' => 'project.logout'
	]);

Route::get('homepage',[
		'uses' => 'UserController@homepage',
		'as' => 'project.homepage'
	]);








Route::middleware(['UserAuthenticate'])->group(function(){
	
Route::get('sign_in', function () {
    return view('sign_in');
});

Route::get('change_password',[
	'uses' 	=> 'RstPswrdController@reset_password_view',
	'as'	=>	'project.reset_password_view'
]);

Route::get('log_in',[
		'uses' => 'UserController@log_in',
		'as' => 'project.log_in'
	]);

Route::get('forget_password', function () {
    return view('forget_password');
});

});





Route::middleware(['UserAccess'])->group(function() {

Route::get('post', function () {
    return view('post');
});

Route::get('displaypost',[
		'uses' => 'PostController@viewpost',
		'as' => 'project.displaypost'
	]);



Route::post('delete','PostController@deletePost');



});
