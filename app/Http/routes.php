<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('');
});

Route::get('/test1', function() {
	return "Hello world";
});

Route::get('/some', 'TestController@someMethod');

Route::group(['namespace' => 'Admin', 'prefix' => '/admin'], function() {
	Route::get('/posts/list', 'PostController@listPosts');
	Route::post('/posts/add', 'PostController@addPosts');
});

// Route::any('{any}', function() {
// 	return 'This is default route';
// })->where('any', '(.*)?');


Route::get('posts', 'TestController@showPosts');