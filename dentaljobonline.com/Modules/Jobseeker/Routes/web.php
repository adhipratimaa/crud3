<?php
use Modules\Jobseeker\Http\Controllers\DefaultController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('jobseeker')->group(function() {
    Route::get('/', 'JobseekerController@index');
});

Route::group(['namespace'=>''],function(){
    // Route::get('/','[DefaultController::class)->name('home');
    Route::get('/',[DefaultController::class,'index']);
    Route::get('/login',[DefaultController::class,'login'])->name('login');
    Route::get('/job-detail',[DefaultController::class,'jobDetail'])->name('jobDetail');
    Route::get('/register',[DefaultController::class,'register'])->name('register');
    Route::get('/student-register',[DefaultController::class,'studentRegister'])->name('studentRegister');
});
