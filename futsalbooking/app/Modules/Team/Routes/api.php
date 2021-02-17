<?php
Route::group(['namespace'=>'App\Modules\Team\Controllers','prefix'=>'team','middleware'=>'auth:api'],function(){
	Route::get('list','API\TeamControllerApi@getAll')->name('team.get.all');
	Route::get('get','API\TeamControllerApi@getTeam')->name('team.get.team');
	Route::get('register','API\TeamControllerApi@registerTeam')->name('team.register');
});
