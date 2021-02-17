<?php
/*Generated Route File*/
Route::group(['namespace'=>'App\Modules\Blog\Controllers','prefix'=>'blog'],function(){
     // Route::get('createblog', 'API\BlogController@newBlog');
     Route::get('allblog', 'API\BlogController@getAllBlog');
     Route::get('blog', 'API\BlogController@blog');


});
