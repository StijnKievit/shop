<?php

use Illuminate\Support\Facades\Request;
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


Route::resource('products', 'Manage\ProductController');

Route::domain('manage'. '.' . Request::getHttpHost())->group(function () {
    //Public Pages route
    Route::get('/', 'Manage\IndexController@getIndex');
    return 'manage subdomain accessed';
});

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{category?}', function($category = null){
    if($category){
        return $category;
    }
    return 'hoofd overview';
});

Route::get('/{category}/{name}/{id}', function ($category, $name, $id) {
    //product route
    return 'product route: '.$category. '/' . $name . '/' . $id;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+', 'category' => '[a-z]+']);