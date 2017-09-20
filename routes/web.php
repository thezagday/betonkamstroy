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
Route::get('/logout',function ()
{
    Auth::logout();
    return redirect('login');
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@index')->name('admin');

Route::get('/read_menu','AdminController@read_menu');
Route::get('/edit_item_menu','AdminController@edit_item_menu');
Route::post('/update_item_menu','AdminController@update_item_menu');

Route::get('/read_contacts','AdminController@read_contacts');
Route::post('/update_contacts','AdminController@update_contacts');

Route::get('/read_slider','AdminController@read_slider');
Route::post('/update_slider','UploadController@update_slider');

Route::get('/read_products','AdminController@read_products');
Route::get('/edit_item_product','AdminController@edit_item_product');
Route::post('/update_item_product','UploadController@update_item_product');
Route::any('/add_product','UploadController@add_product');
Route::get('/delete_item_product','AdminController@delete_item_product');

Route::get('/read_causes','AdminController@read_causes');
Route::get('/edit_item_cause','AdminController@edit_item_cause');
Route::post('/update_item_cause','UploadController@update_item_cause');
Route::any('/add_cause','UploadController@add_cause');
Route::get('/delete_item_cause','AdminController@delete_item_cause');

Route::get('/read_works','AdminController@read_works');
Route::get('/edit_item_work','AdminController@edit_item_work');
Route::post('/update_item_work','UploadController@update_item_work');
Route::any('/add_work','UploadController@add_work');
Route::get('/delete_item_work','AdminController@delete_item_work');

Route::get('/read_guarantees','AdminController@read_guarantees');
Route::get('/edit_item_guarantee','AdminController@edit_item_guarantee');
Route::post('/update_item_guarantee','UploadController@update_item_guarantee');
Route::any('/add_guarantee','UploadController@add_guarantee');
Route::get('/delete_item_guarantee','AdminController@delete_item_guarantee');

Route::get('/read_materials','AdminController@read_materials');
Route::post('/update_materials','AdminController@update_materials');

Route::get('/read_backs','AdminController@read_backs');
Route::get('/edit_item_read_back','AdminController@edit_item_read_back');
Route::post('/update_item_back','UploadController@update_item_back');
Route::any('/add_back','UploadController@add_back');
Route::get('/delete_item_back','AdminController@delete_item_back');

Route::any('/reset','AdminController@reset');

Route::post('/mail','MailController@mail');
Route::post('/calculate_coast','MailController@calculate_coast');
Route::post('/price_list','MailController@price_list');


