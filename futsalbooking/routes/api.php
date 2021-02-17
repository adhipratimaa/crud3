<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::post('login', 'API\UserController@login');
//Route::post('register', 'API\UserController@register');

//route handler for modules

$activeModules=config("modules.active");
if(!$activeModules){
	$activeModules=[];
}

foreach($activeModules as $module){
        // include all the routes of the modules.
		include_once(dirname(__FILE__)."/../app/Modules/".$module."/Routes/api.php");
    }





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
