<?php
Route::group(['namespace'=>'App\Modules\Authentication\Controllers','prefix'=>'authentication'],function(){
	Route::get('login', 'API\UserController@login');
	Route::get('register', 'API\UserController@register');
	Route::group(['middleware'=>'auth:api'],function(){
			Route::get('details', 'API\UserController@details');		
	});
});

