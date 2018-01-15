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
//Admin side

Route::get('admin/rooms', 'Admin\RoomController@index')->name('rooms')->middleware('auth');
Route::match(['get', 'post'], 'admin/rooms/add', ['uses' => 'Admin\RoomController@addRoom', 'as' => 'admin/rooms/add'])->middleware('auth');
Route::match(['get', 'post'], 'admin/rooms/images', ['uses' => 'Admin\RoomController@images', 'as' => 'admin/rooms/images'])->middleware('auth');
Route::post('rooms/index/add', 'Admin\RoomController@addRoom')->name('addroom')->middleware('auth');
Route::match(['get', 'post'], 'admin/rooms/edit', ['uses' => 'Admin\RoomController@editRoom', 'as' => 'edit'])->middleware('auth');
Route::match(['get', 'post'], 'admin/categoryform', ['uses' => 'Admin\CategoryController@AddCategory', 'as' => 'admin/formcategory'])->middleware('auth');
Route::match(['get', 'post'], 'admin/editcategory', ['uses' => 'Admin\CategoryController@EditCategory', 'as' => 'admin/editcategory'])->middleware('auth');
Route::post('contacts/sendmessage', 'FrontContactsController@sendMessage')->name('sendmessage');
Route::get('admin/contacts', 'Admin\ContactsController@index')->name('contacts.index')->middleware('auth');
Route::get('roomdetails', 'RoomController@roomDetails')->name('roomdetails');
Route::match(['get', 'post'], 'admin/contacts/add', ['uses' => 'Admin\ContactsController@add', 'as' => 'contacts/add'])->middleware('auth');
Route::match(['get', 'post'], 'admin/contacts/edit', ['uses' => 'Admin\ContactsController@edit', 'as' => 'contacts/edit'])->middleware('auth');
Route::get('admin/showcategories', 'Admin\CategoryController@index')->name('admin/showcategories')->middleware('auth');
Route::get('admin/showorders', 'Admin\OrderController@index')->name('admin/showorders')->middleware('auth');
Route::get('admin/checkorders', 'Admin\OrderController@orderCheck')->name('a')->middleware('auth');
Route::get('admin/delorder', 'Admin\OrderController@delete')->name('b')->middleware('auth');
Route::delete('admin/rooms/images/delete/{image}', 'Admin\RoomController@delete')->name('imageDelete')->middleware('auth');
Route::delete('admin/rooms/delete/{room}','Admin\RoomController@destroy')->name('deleteRoom')->middleware('auth');
Route::match(['get', 'post'], 'admin/slider', ['uses' => 'Admin\SliderController@images', 'as' => 'admin/slider'])->middleware('auth');
Route::delete('admin/slider/delete/{image}','Admin\SliderController@delete')->name('slidImgDel')->middleware('auth');


//Front side
Route::get('/', 'SliderfrontController@index' )->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get'], 'catalog', ['uses' => 'CatalogController@index', 'as' => 'catalog']);
Route::match(['get'], 'contacts', ['uses' => 'FrontContactsController@index', 'as' => 'contacts']);
Route::get('feetback', 'FeettbackController@index')->name('feetback');
Route::post('feetback/sendfeedback', 'FeettbackController@addFeedback')->name('sendfeedback');
Route::get('roomlist', 'RoomController@index')->name('roomlist');
Route::post('preorder', 'CatalogController@PreOrder')->name('preorder');
