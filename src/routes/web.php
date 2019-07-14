 <?php

Route::group(['namespace'=>'Gunaseelan\Admin\Http\Controllers'],function(){
	Route::get('/admin','AdminController@index');
});


