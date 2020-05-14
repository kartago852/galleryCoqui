<?php

use Illuminate\Support\Facades\Route;



Route::resource('/', 'HomeController');

Route::resource('gallery','GalleryController' );

Route::post('gallery/imagen','GalleryController@guardarImangen' );

Route::resource('contact','ContactController' );

Route::resource('admin','AdminController' );


Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home'); */

/* Route::get('/testConnection', function () {
    try {
        DB::connection()->getPdo();
        if(DB::connection()->getDatabaseName()){
            echo "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
            die;
        }else{
            die("Could not find the database. Please check your configuration.");
        }
    } catch (\Exception $e) {
        die($e->GetMessage());
    }
    });
 */
