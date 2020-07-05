<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','FrontendController@homePage');
Route::get('/post_details/{id}','FrontendController@blogPostDetails');
Route::get('/video_post_details/{id}','FrontendController@videoPostDetails');


/*Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();



Route::group(['middleware'=>['auth']],function(){
	Route::get('/home', 'HomeController@index')->name('dashboard');
	Route::get('/unactive/{id}','Admin\BlogController@unactivePost');
    Route::get('/active/{id}','Admin\BlogController@activePost');
	Route::resource('blog','Admin\BlogController');
});
 







 