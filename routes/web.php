<?php
use app\Http\MemberController;
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

// Home
Route::get('/', 'Auth\LoginController@home');

// Cards
// Route::get('cards', 'CardController@list');
// Route::get('cards/{id}', 'CardController@show');
Route::get('project','MemberController@list');
Route::get('project/{id}','ProjectController@showProject');
// APIt
Route::put('api/cards', 'CardController@create');
Route::delete('api/cards/{card_id}', 'CardController@delete');
Route::put('api/cards/{card_id}/', 'ItemController@create');
Route::post('api/item/{id}', 'ItemController@update');
Route::delete('api/item/{id}', 'ItemController@delete');


// Authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
Route::post('api/project', 'MemberController@memberCreateProject')->name('project');
//Create Project


//task
Route::post('api/createtask/{id}', 'TaskController@createTask')->name('Task');
Route::get('api/createTaskPage','TaskController@createTaskPage');

Route::get('aboutUs',function(){
    return view('pages/about');
});
   

Route::get('contact',function(){
    return view('pages/contact');
});
Route::get('faq',function(){
    return view('pages/faq');
});
Route::get('privacy',function(){
    return view('pages/privacy');
});
Route::get('services',function(){
    return view('pages/services');
});



Route::get('createProject',function(){
    return view('auth/createProject');
});

Route::get('createTask', function(){
    return view('auth/createTask');
});

Route::get('show','ProjectController@index');

Route::get('showProj/{id}','MemberController@showProjectsMember');


Route::get('getTasks','TaskController@index');


Route::get('inviteMember/{pid}','MemberController@inviteMember')->name('inviteMember');


Route::post('joinMember','MemberController@joinMember')->name('joinMember');
Route::get('createTask/{id}', 'TaskController@createTask')->name('createTask');

Route::post('insertTask','TaskController@insertTask')->name('insertTask');