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
Auth::routes();
Route::get('/', function () { return view('welcome'); });
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/rooms', 'Admin\RoomController@index')->name('rooms');
Route::match(['get', 'post'], 'admin/rooms/add', ['uses' => 'Admin\RoomController@addRoom', 'as' => 'admin/rooms/add']);
Route::match(['get', 'post'], 'admin/rooms/images', ['uses' => 'Admin\RoomController@images', 'as' => 'admin/rooms/images']);

Route::post('rooms/index/add', 'Admin\RoomController@addRoom')->name('addroom');
Route::match(['get', 'post'], 'admin/rooms/edit', ['uses' => 'Admin\RoomController@editRoom', 'as' => 'edit']);
Route::match(['get', 'post'], 'admin/categoryform', ['uses' => 'Admin\CategoryController@AddCategory', 'as' => 'admin/formcategory']);

Route::match(['get', 'post'], 'admin/editcategory', ['uses' => 'Admin\CategoryController@EditCategory', 'as' => 'admin/editcategory']);

Route::post('contacts/sendmessage', 'FrontContactsController@sendMessage')->name('sendmessage');

Route::get('admin/contacts', 'Admin\ContactsController@index')->name('contacts.index');
Route::get('roomdetails', 'RoomController@roomDetails')->name('roomdetails');

Route::match(['get', 'post'], 'admin/contacts/add', ['uses' => 'Admin\ContactsController@add', 'as' => 'contacts/add']);
Route::match(['get', 'post'], 'admin/contacts/edit', ['uses' => 'Admin\ContactsController@edit', 'as' => 'contacts/edit']);
Route::match(['get'], 'catalog', ['uses' => 'CatalogController@index', 'as' => 'catalog']);
Route::match(['get'], 'contacts', ['uses' => 'FrontContactsController@index', 'as' => 'contacts']);
Route::get('feetback', 'FeettbackController@index')->name('feetback');
Route::post('feetback/sendfeedback', 'FeettbackController@addFeedback')->name('sendfeedback');
Route::get('roomlist', 'RoomController@index')->name('roomlist');
Route::post('preorder', 'CatalogController@PreOrder')->name('preorder');
Route::get('admin/showcategories', 'Admin\CategoryController@index')->name('admin/showcategories');
Route::delete('admin/rooms/images/delete/{image}', 'Admin\RoomController@delete')->name('imageDelete');
