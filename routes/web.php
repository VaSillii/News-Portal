<?php

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
Route::get('/', 'startPage@startPage')->name('/');


Route::group(['middleware' => 'guest'], function () {
	Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	Route::post('/register', 'Auth\RegisterController@register');
	Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('/login', 'Auth\LoginController@login');
});

//Account
Route::group(['middleware' => 'auth'], function() {
	Route::get('logout', function() {
		\Auth::logout();
		return redirect(route('login'));
	})->name('logout');

	//авторизация, переход в профиль пользователя  
	Route::get('my/account', 'AccountController@index')->name('account');


	// Admin
	Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {
		Route::get('/', 'Admin\AccountController@index')->name('admin');

		Route::get('categories', 'Admin\CategoriesController@index')->name('categories');


	//Категории
		//Добавление категорий
		Route::get('categories/add', 'Admin\CategoriesController@addCategory')
				->name('categories.add');
		Route::post('categories/add', 'Admin\CategoriesController@addRequestCategory');


		//Редактирование категорий 
		Route::get('categories/edit/{id}', 'Admin\CategoriesController@editCategory')
				->where('id', '\d+')
				->name('categories.egit');

		Route::post('categories/edit/{id}', 'Admin\CategoriesController@editRequestCategory');

		//Удаление категорий 
		Route::delete('/categories/delete', 'Admin\CategoriesController@deleteCategory')->name('categories.delete');

	//Статьи
		Route::get('/articles', 'Admin\ArticlesController@index')->name('articles');

		// Добавлние статей 
		Route::get('/articles/add', 'Admin\ArticlesController@addArticles')->name('articles.add');
		// Route::post('/articles/add', 'Admin\ArticlesController@addRequestArticle');

		// Редактирование статей
		Route::get('/articles/edit{id}', 'Admin\ArticlesController@editArticles')->where('id', '/d+')->name('articles.edit');
		// Удаление статей 
		Route::delete('/articles/delete', 'Admin\ArticlesController@deleteArticles')->name('articles.delete');

	});
});