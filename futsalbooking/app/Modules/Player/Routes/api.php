<?php
Route::group(['namespace'=>'App\Modules\Player\Controllers','prefix'=>'player'],function(){
	Route::get('list','API\PlayerControllerApi@getAll')->name('player.get.all');
	Route::get('get','API\PlayerControllerApi@getPlayer')->name('player.get.player');
	Route::get('register','API\PlayerControllerApi@registerPlayer')->name('player.register');
});
