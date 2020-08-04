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

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/register', function() {
    return abort(404);
});

Route::get('/password/reset', function() {
    return abort(404);
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Route::middleware(['auth','role'])->group(function(){
    Route::namespace('Admin')->group(function(){
        Route::get('/admin', 'AdminController@index')->name('admin.home');
        Route::prefix('admin')->group(function(){
            Route::prefix('user')->group(function(){
                Route::get('/', 'UserController@index')->name('user');
                Route::get('/json', 'UserController@json')->name('user.json');
                Route::get('/add', 'UserController@create')->name('user.add');
                Route::post('/store', 'UserController@store')->name('user.store');
                Route::get('/edit/{user}', 'UserController@edit')->name('user.edit');
                Route::patch('/edit/{user}', 'UserController@update')->name('user.update');
                Route::delete('/delete/{user}', 'UserController@destroy')->name('user.destroy');
            });
        });
    });
});


