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

Route::get('/', function () {
    return view('welcome');
});
Route::get('login' , 'LoginController@getLogin');
Route::post('login' , 'LoginController@postLogin');
Route::get('/trangchu','PostController@index')->name('listPosts');
Route::get('themmoi','PostController@add')->name('themmoi');
Route::post('themmoi','PostController@add_save');
Route::get('/xemchitiet/{id}','PostController@xemchitiet')->name('list_Posts');
Route::get('themmoi_comment','PostController@add_comment')->name('themmoi_comment');
Route::post('themmoi_comment','PostController@add_save_comment');

//Bài tập phần Eloquent ORM
Route::get('add_student',function (){
        return view('add_student') ;
});
Route::post('add_student' ,'StudentController@add_save_student')->name('add_save');

Route::get('timkiem' , 'StudentController@index');
Route::get('timkiem' , 'StudentController@index')->name('list');
Route::post('timkiem', 'StudentController@timkiem')->name('timkiem');
