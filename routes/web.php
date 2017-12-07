<?php

// use Illuminate\Http\Request;

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



Route::group(['middleware' =>['web']], function(){
  // Route::get('auth/login','Auth\AuthController@getLogin');
  // Route::post('auth/logon', 'Auth\AuthController@postLogin');
  // Route::get('auth/logout', 'Auth\AuthController@getLogout');
  //
  // Route::get('auth/register', 'Auth\AuthController@getRegister');
  // Route::post('auth/register', 'Auth\AuthController@postRegister');


  Route::get('blog/{slug}', ['as'=>'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
  Route::get('blog',['uses'=>'BlogController@getIndex', 'as'=>'blog.index']);
  Route::get('contact', 'PagesController@getContact');
  Route::get('about', 'PagesController@getAbout');
  Route::get('/', 'PagesController@getIndex');
  Route::resource('posts', 'PostController');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
